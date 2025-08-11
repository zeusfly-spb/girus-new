<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $service_id
 * @property int|null $hotel_id
 * @property string $type
 * @property \Illuminate\Support\Carbon $ctime
 * @property \Illuminate\Support\Carbon $mtime
 * @property int $quota
 * @property int $quota1
 * @property int $quota2
 * @property array<array-key, mixed>|null $prices
 * @property array<array-key, mixed>|null $prices_partner
 * @property int $price
 * @property int|null $price_partner
 * @property \Illuminate\Support\Carbon|null $stop_date
 * @property int $off
 * @property int $lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OfferDate> $dates
 * @property-read int|null $dates_count
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereMtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePricePartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePrices($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePricesPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereStopDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    protected $guarded = [];
    protected $casts = [
        'ctime' => 'datetime',
        'mtime' => 'datetime',
        'stop_date' => 'date',
        'type' => 'string',
        'prices' => 'array',
        'prices_partner' => 'array',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function dates(): HasMany
    {
        return $this->hasMany(OfferDate::class, 'offer_id');
    }

}
