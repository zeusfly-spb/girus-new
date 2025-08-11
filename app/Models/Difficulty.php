<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name_ru
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Difficulty extends Model
{
    protected $guarded = [];
}
