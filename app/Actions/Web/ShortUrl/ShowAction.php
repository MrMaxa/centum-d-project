<?php

declare(strict_types=1);

namespace App\Actions\Web\ShortUrl;

use App\Models\ShortUrl\ShortUrl;
use App\Repositories\ShortUrl\ShortUrlRepository;
use App\Responders\Redirect\ShortUrl\ShowResponder;
use Symfony\Component\HttpFoundation\Response;

class ShowAction
{
    public function __construct(
        private readonly ShowResponder $responder,
        private readonly ShortUrlRepository $shortUrlRepository,
    ) {
    }

    public function handle(ShortUrl $shortUrl): Response
    {
        $this->shortUrlRepository->incrementHits($shortUrl);

        return $this->responder->send($shortUrl);
    }
}
