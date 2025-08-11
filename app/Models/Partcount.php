<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id Идентификатор записи
 * @property string $name_ru Название на русском
 * @property array<array-key, mixed> $name JSON с переводами
 * @property array<array-key, mixed> $service_type Тип услуги
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tour> $tours
 * @property-read int|null $tours_count
 * @property-read bool|null $tours_exists
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereServiceType($value)
 * @mixin \Eloquent
 */
class Partcount extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
        'service_type' => 'array',
    ];
    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class, 'partcount');
    }

}
