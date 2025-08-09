<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static updateOrCreate(array $array, array $array1)
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
