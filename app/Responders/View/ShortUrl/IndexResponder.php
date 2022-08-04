<?php

declare(strict_types=1);

namespace App\Responders\View\ShortUrl;

use Illuminate\Contracts\View\View;

class IndexResponder
{
    public function send(): View
    {
        return view('pages.shortUrl.index.form');
    }
}
