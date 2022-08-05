<?php

declare(strict_types=1);

namespace App\Http\Requests\ShortUrl;

use App\Http\Requests\WebFormRequest;

/**
 * @property string $fullUrl
 * @property int $transitionLimit
 * @property int $lifetime
 */
class StoreRequest extends WebFormRequest
{
    public function rules(): array
    {
        return [
            'fullUrl' => [
                'required',
                'url',
            ],
            'transitionLimit' => [
                'required',
                'integer',
                'min:0',
            ],
            'lifetime' => [
                'required',
                'integer',
                'min:1',
                'max:86400',
            ],
        ];
    }
}
