<?php

declare(strict_types=1);

namespace App\Responders\Redirect\ShortUrl;

use Symfony\Component\HttpFoundation\Response;

class StoreResponder
{
    public function send(): Response
    {
        return response()
            ->redirectToRoute('short-url.index');
    }
}
