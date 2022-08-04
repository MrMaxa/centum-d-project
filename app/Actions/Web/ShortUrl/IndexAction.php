<?php

declare(strict_types=1);

namespace App\Actions\Web\ShortUrl;

use App\Responders\View\ShortUrl\IndexResponder;
use Illuminate\Contracts\View\View;

class IndexAction
{
    public function __construct(private readonly IndexResponder $responder)
    {
    }

    public function handle(): View
    {
        return $this->responder->send();
    }
}
