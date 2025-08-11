<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $tour_id
 * @property int $activity_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Activity|null $activity
 * @property-read \App\Models\Tour|null $tour
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ActivityTour extends Model
{
    protected $guarded = [];
    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
