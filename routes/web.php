<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ShortUrl\ShortUrlController;

Route::get('', [ShortUrlController::class, 'index'])
    ->name('short-url.index');

Route::post('', [ShortUrlController::class, 'store'])
    ->name('short-url.store');

Route::get('{shortUrl:token}', [ShortUrlController::class, 'show'])
    ->name('short-url.show');
