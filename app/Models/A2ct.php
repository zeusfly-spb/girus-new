<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $acmd_id
 * @property int $activity_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @property-read \App\Models\Activity|null $activity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|A2ct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class A2ct extends Model
{
    protected $guarded = [];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
