<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
