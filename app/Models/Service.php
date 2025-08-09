<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $service)
 */
class Service extends Model
{
    protected $guarded = [];
    protected $casts = [
        'type' => 'string',
        'name' => 'array',
    ];

    public function acmd(): BelongsTo
    {
        return $this->belongsTo(Acmd::class);
    }
}
