<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $region_id
 * @property string|null $address
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Hotel extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
