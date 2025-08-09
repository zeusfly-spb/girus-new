<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static updateOrCreate(array $array, array $category)
 */
class CategoryTematics extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];

    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }
}
