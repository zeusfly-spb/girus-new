<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static updateOrCreate(int[] $array, int[] $a2ct)
 */
class A2ct extends Model
{
    protected $guarded = [];
    public function acmd(): BelongsTo
    {
        return $this->belongsTo(Acmd::class);
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
