<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $service_id
 * @property int|null $ord_id
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property bool $is_available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ord|null $ord
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereUpdatedAt($value)
 * @mixin \Eloquent
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
