<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\ShortUrl{
/**
 * App\Models\ShortUrl\ShortUrl
 *
 * @property int $id
 * @property string $full_url
 * @property string $token
 * @property int $transition_limit Maximum number of clicks on the link. 0 = unlimited
 * @property int $hits Amount of short URL visits
 * @property int $lifetime
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereFullUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereHits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereLifetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereTransitionLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereUpdatedAt($value)
 */
	class ShortUrl extends \Eloquent {}
}

