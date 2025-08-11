<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tematics extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
