<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    protected $guarded = [];
    protected $casts = [
        'type' => 'string',
        'categories' => 'array',
        'tematics' => 'array',
        'collections' => 'array',
        'transfer' => 'boolean',
    ];

    public function partcount(): BelongsTo
    {
        return $this->belongsTo(Partcount::class);
    }
}
