<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Food extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];
}
