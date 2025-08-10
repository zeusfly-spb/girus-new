<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @method static find(int|string|null $id)
 * @method static where(string $string, string $string1)
 * @method static create(array $array)
 * @method static updateOrCreate(array $array)
 */
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasApiTokens, hasRoles;
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'ctime' => 'datetime',
            'ltime' => 'datetime',
            'mtime' => 'datetime',
            'status' => 'boolean',
        ];
    }
    public function seller(): HasOne
    {
        return $this->hasOne(Seller::class);
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }
}
