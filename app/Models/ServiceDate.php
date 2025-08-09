<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $serviceDate)
 */
class ServiceDate extends Model
{
    protected $guarded = [];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_available' => 'boolean',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function ord(): BelongsTo
    {
        return $this->belongsTo(Ord::class);
    }
}
