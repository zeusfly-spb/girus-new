<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $tematic)
 */
class Tematics extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];
}
