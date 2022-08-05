<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\ShortUrl;

use App\Actions\Web\ShortUrl\IndexAction;
use App\Actions\Web\ShortUrl\ShowAction;
use App\Actions\Web\ShortUrl\StoreAction;
use App\Http\Controllers\Web\BaseController;
use App\Http\Requests\ShortUrl\ShowRequest;
use App\Http\Requests\ShortUrl\StoreRequest;
use App\Models\ShortUrl\ShortUrl;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\Response;

class ShortUrlController extends BaseController
{
    public function index(IndexAction $action): View
    {
        return $action->handle();
    }

    public function store(StoreRequest $request, StoreAction $action): Response
    {
        return $action->handle($request);
    }

    public function show(
        ShortUrl $shortUrl,
        ShowRequest $request,
        ShowAction $action
    ): Response {
        return $action->handle($shortUrl);
    }
}
