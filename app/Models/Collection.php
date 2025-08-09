<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $collection)
 */
class Collection extends Model
{
    protected $guarded = [];
    protected $casts = [
        'top' => 'boolean',
    ];
}
