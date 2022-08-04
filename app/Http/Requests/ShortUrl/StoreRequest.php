<?php

declare(strict_types=1);

namespace App\Http\Requests\ShortUrl;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

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
