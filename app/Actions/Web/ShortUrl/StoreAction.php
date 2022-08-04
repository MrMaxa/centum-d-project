<?php

declare(strict_types=1);

namespace App\Actions\Web\ShortUrl;

use App\Http\Requests\ShortUrl\StoreRequest;

class StoreAction
{
    public function __construct()
    {
    }

    public function handle(StoreRequest $request)
    {
        return;
    }
}
