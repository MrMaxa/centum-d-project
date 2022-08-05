<?php

declare(strict_types=1);

namespace App\Actions\Web\ShortUrl;

use App\Http\Requests\ShortUrl\StoreRequest;
use App\Responders\Redirect\ShortUrl\StoreResponder;
use App\Services\ShortUrl\ShortUrlService;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class StoreAction
{
    public function __construct(
        private readonly ShortUrlService $shortUrlService,
        private readonly StoreResponder $responder,
    ) {
    }

    public function handle(StoreRequest $request): Response
    {
        $lifetimeEnd = Carbon::now()->addSeconds($request->lifetime);

        $shortUrlData = [
            'full_url' => $request->fullUrl,
            'transition_limit' => $request->transitionLimit,
            'lifetime' => $lifetimeEnd
        ];

        $shortUrlModel = $this->shortUrlService->create($shortUrlData);

        $shortUrl = route('short-url.show', [$shortUrlModel]);

        Session::flash('shortUrl', $shortUrl);

        return $this->responder->send();
    }
}
