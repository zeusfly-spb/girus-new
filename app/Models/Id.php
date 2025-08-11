<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property int $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\IdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereValue($value)
 * @mixin \Eloquent
 */
class Id extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
}
