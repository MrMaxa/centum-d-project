<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\ShortUrl;

use App\Actions\Web\ShortUrl\IndexAction;
use App\Actions\Web\ShortUrl\StoreAction;
use App\Http\Controllers\Web\BaseController;
use App\Http\Requests\ShortUrl\StoreRequest;
use Illuminate\Contracts\View\View;

class ShortUrlController extends BaseController
{
    public function index(IndexAction $action): View
    {
        return $action->handle();
    }

    public function store(StoreRequest $request, StoreAction $action)
    {
        return $action->handle($request);
    }
}
