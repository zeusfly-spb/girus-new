<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Star> $stars
 * @property-read int|null $stars_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Acmd extends Model
{
    protected $guarded = [];

    protected $casts = [
        'name' => 'array',
    ];

    public function stars(): HasMany
    {
        return $this->hasMany(Star::class, 'acmd_id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
