<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int|null $user_id
 * @property int|null $tour_id
 * @property int|null $offer_id
 * @property string|null $status
 * @property numeric|null $total_price
 * @property \Illuminate\Support\Carbon|null $order_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offer
 * @property-read \App\Models\Tour|null $tour
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereUserId($value)
 * @mixin \Eloquent
 */
class Ord extends Model
{
    protected $guarded = [];
    protected $casts = [
        'total_price' => 'decimal:2',
        'order_date' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
