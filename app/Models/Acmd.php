<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static updateOrCreate(array $array, array $acmd)
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
