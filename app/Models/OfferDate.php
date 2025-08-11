<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $offer_id
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property int $quota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereQuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OfferDate extends Model
{
    protected $guarded = [];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'quota' => 'integer',
    ];
    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
}
