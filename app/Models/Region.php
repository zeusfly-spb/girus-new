<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property string|null $img
 * @property string|null $info
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Hotel> $hotels
 * @property-read int|null $hotels_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Partner> $partners
 * @property-read int|null $partners_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Target> $targets
 * @property-read int|null $targets_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Region extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public $timestamps = false;

    public function targets(): HasMany
    {
        return $this->hasMany(Target::class, 'region_id');
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'region_id');
    }

    public function partners(): HasMany
    {
        return $this->hasMany(Partner::class, 'region_id');
    }
}
