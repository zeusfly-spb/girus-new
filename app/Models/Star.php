<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $star)
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
