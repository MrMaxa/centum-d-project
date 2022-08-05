<?php

declare(strict_types=1);

namespace App\Repositories\ShortUrl;

use App\Models\ShortUrl\ShortUrl;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Carbon;

class ShortUrlRepository
{
    public function create(array $shortUrlData): ShortUrl
    {
        $model = new ShortUrl($shortUrlData);
        $model->save();

        return $model;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function firstOrFailNotExpired(string $token): ShortUrl
    {
        /** @var ShortUrl $shortUrl */
        $shortUrl = ShortUrl::query()
            ->where('token', $token)
            ->where('lifetime', '>=', Carbon::now())
            ->firstOrFail();

        return $shortUrl;
    }

    public function incrementHits(ShortUrl $shortUrl): ShortUrl
    {
        $shortUrl->increment('hits');

        return $shortUrl;
    }
}
