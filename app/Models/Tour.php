<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $offer_id
 * @property int|null $region_id
 * @property int|null $partner_id
 * @property int|null $category_tematics_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property numeric|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Offer|null $offer
 * @property-read \App\Models\Partcount|null $partcount
 * @property-read \App\Models\Partner|null $partner
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereCategoryTematicsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tour extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'price' => 'decimal:2',
    ];

    public function partcount(): BelongsTo
    {
        return $this->belongsTo(Partcount::class);
    }
    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
