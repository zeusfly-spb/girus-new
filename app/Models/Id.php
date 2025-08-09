<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static factory()
 * @method static create(string[] $array, int[] $array1)
 */
class Id extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
}
