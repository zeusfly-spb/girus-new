<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static find(int|string|null $id)
 * @method static where(string $string, string $string1)
 * @method static create(array $array)
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'type',
        'email',
        'salt',
        'passwd',
        'ctime',
        'ltime',
        'mtime',
        'ecount',
        'status',
        'name',
        'phone',
        'msg_user',
        'msg_admin',
        'msg_total',
        'ord_count',
    ];
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
    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

    public function partner()
    {
        return $this->hasOne(Partner::class);
    }
}
