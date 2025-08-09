<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(array $array, array $text)
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
