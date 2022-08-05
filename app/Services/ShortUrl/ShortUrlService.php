<?php

declare(strict_types=1);

namespace App\Services\ShortUrl;

use App\Models\ShortUrl\ShortUrl;
use App\Repositories\ShortUrl\ShortUrlRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ShortUrlService
{
    private const RANDOM_STR_LENGTH = 6;

    private const SHORT_CODE_LENGTH = 8;

    public function __construct(private readonly ShortUrlRepository $shortUrlRepository)
    {
    }

    public function create(array $shortUrlData): ShortUrl
    {
        $shortUrlData['token'] = $this->generateUniqueCode();

        return $this->shortUrlRepository->create($shortUrlData);
    }

    private function generateUniqueCode(): string
    {
        $currentTimestamp = Carbon::now()->getTimestamp();
        $randomStr = Str::random(self::RANDOM_STR_LENGTH);
        $uniqueCode = $currentTimestamp . $randomStr;
        $uniqueCode = base64_encode($uniqueCode);

        $uniqueCode = Str::replace('=', '', $uniqueCode);

        return Str::substr($uniqueCode, (self::SHORT_CODE_LENGTH * -1), self::SHORT_CODE_LENGTH);
    }
}
