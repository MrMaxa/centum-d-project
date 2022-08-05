<?php

declare(strict_types=1);

namespace App\Models\ShortUrl;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'lifetime' => 'timestamp',
    ];
}
