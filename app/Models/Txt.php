<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int $muser
 * @property int|null $acmd_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @property-read \App\Models\Admin|null $admin
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereMuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Txt extends Model
{
    protected $guarded = [];
    protected $casts = [
        'name' => 'array',
        'muser' => 'integer',
        'acmd_id' => 'integer',
    ];

    public function acmd(): BelongsTo
    {
        return $this->belongsTo(Acmd::class, 'acmd_id');
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'muser');
    }
}
