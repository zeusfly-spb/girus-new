<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $category_id
 * @property int $tematics_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Tematics|null $tematics
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereTematicsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryTematics extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tematics(): BelongsTo
    {
        return $this->belongsTo(Tematics::class);
    }
}
