<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Service> $services
 * @property-read int|null $services_count
 * @property-read bool|null $services_exists
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Star> $stars
 * @property-read int|null $stars_count
 * @property-read bool|null $stars_exists
 * @method static Builder<static>|Acmd newModelQuery()
 * @method static Builder<static>|Acmd newQuery()
 * @method static Builder<static>|Acmd query()
 * @method static Builder<static>|Acmd whereCreatedAt($value)
 * @method static Builder<static>|Acmd whereId($value)
 * @method static Builder<static>|Acmd whereName($value)
 * @method static Builder<static>|Acmd whereNameRu($value)
 * @method static Builder<static>|Acmd whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Acmd extends Model
{
    protected $guarded = [];

    protected $casts = [
        'name' => 'array',
    ];

    public function stars(): HasMany
    {
        return $this->hasMany(Star::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
