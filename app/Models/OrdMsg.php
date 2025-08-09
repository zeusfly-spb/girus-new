<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $message)
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
