<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $region_id
 * @property string|null $info
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Target extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public $timestamps = false;

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
