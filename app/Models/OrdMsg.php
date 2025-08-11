<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $ord_id
 * @property int|null $user_id
 * @property string $message
 * @property bool $is_admin
 * @property \Illuminate\Support\Carbon|null $sent_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ord|null $ord
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereUserId($value)
 * @mixin \Eloquent
 */
class OrdMsg extends Model
{
    protected $guarded = [];
    protected $casts = [
        'is_admin' => 'boolean',
        'sent_at' => 'datetime',
    ];

    public function ord(): BelongsTo
    {
        return $this->belongsTo(Ord::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
