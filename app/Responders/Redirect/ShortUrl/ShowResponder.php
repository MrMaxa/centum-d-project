<?php

declare(strict_types=1);

namespace App\Responders\Redirect\ShortUrl;

use App\Models\ShortUrl\ShortUrl;
use Symfony\Component\HttpFoundation\Response;

class ShowResponder
{
    public function send(ShortUrl $shortUrl): Response
    {
        return response()
            ->redirectTo($shortUrl->full_url);
    }
}
