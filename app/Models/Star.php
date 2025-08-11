<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string|null $name_ru
 * @property array<array-key, mixed>|null $name
 * @property int|null $acmd_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Star extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
        'acmd_id' => 'integer',
    ];

    public function acmd(): BelongsTo
    {
        return $this->belongsTo(Acmd::class);
    }
}
