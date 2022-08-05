<?php

declare(strict_types=1);

namespace App\Http\Requests\ShortUrl;

use App\Http\Requests\WebFormRequest;
use App\Rules\ShortUrl\IsAccessibleRule;

class ShowRequest extends WebFormRequest
{
    protected $stopOnFirstFailure = true;

    public function validationData(): array
    {
        $routeParams = $this->route()->parameters();
        $defaultParams = $this->all();

        return array_merge($routeParams, $defaultParams);
    }

    public function rules(): array
    {
        return [
            'shortUrl' => [
                new IsAccessibleRule
            ]
        ];
    }
}
