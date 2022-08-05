<?php

declare(strict_types=1);

namespace App\Rules\ShortUrl;

use App\Models\ShortUrl\ShortUrl;
use App\Repositories\ShortUrl\ShortUrlRepository;
use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Translation\PotentiallyTranslatedString;
use Closure;

class IsAccessibleRule implements InvokableRule
{
    private readonly ShortUrlRepository $shortUrlRepository;

    public function __construct()
    {
        $this->shortUrlRepository = app(ShortUrlRepository::class);
    }

    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed $value
     * @param Closure(string):PotentiallyTranslatedString $fail
     *
     * @throws ModelNotFoundException
     */
    public function __invoke($attribute, $value, $fail): void
    {
        $token = ($value instanceof ShortUrl) ? $value->token : strval($value);
        $shortUrl = $this->shortUrlRepository->firstOrFailNotExpired($token);

        if ($shortUrl->transition_limit === 0 || $shortUrl->hits < $shortUrl->transition_limit) {
            return;
        }

        throw (new ModelNotFoundException)->setModel(ShortUrl::class);
    }
}
