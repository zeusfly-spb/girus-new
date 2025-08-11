<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $activity)
 */
class Activity extends Model
{
    protected $guarded = [];

    protected $casts = [
        'name' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
