<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $category)
 */
class Category extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
    ];
}
