<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static updateOrCreate(array $array, array $array1)
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
