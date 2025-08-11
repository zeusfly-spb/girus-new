<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $type
 * @property string|null $salt
 * @property Carbon|null $ctime
 * @property Carbon|null $ltime
 * @property Carbon|null $mtime
 * @property int $ecount
 * @property bool $status
 * @property string|null $phone
 * @property int $msg_user
 * @property int $msg_admin
 * @property int $msg_total
 * @property int $ord_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read bool|null $notifications_exists
 * @property-read \App\Models\Partner|null $partner
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read bool|null $permissions_exists
 * @property-read Collection<int, Role> $roles
 * @property-read int|null $roles_count
 * @property-read bool|null $roles_exists
 * @property-read \App\Models\Seller|null $seller
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read bool|null $tokens_exists
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static Builder<static>|User newModelQuery()
 * @method static Builder<static>|User newQuery()
 * @method static Builder<static>|User permission($permissions, $without = false)
 * @method static Builder<static>|User query()
 * @method static Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static Builder<static>|User whereCreatedAt($value)
 * @method static Builder<static>|User whereCtime($value)
 * @method static Builder<static>|User whereEcount($value)
 * @method static Builder<static>|User whereEmail($value)
 * @method static Builder<static>|User whereEmailVerifiedAt($value)
 * @method static Builder<static>|User whereId($value)
 * @method static Builder<static>|User whereLtime($value)
 * @method static Builder<static>|User whereMsgAdmin($value)
 * @method static Builder<static>|User whereMsgTotal($value)
 * @method static Builder<static>|User whereMsgUser($value)
 * @method static Builder<static>|User whereMtime($value)
 * @method static Builder<static>|User whereName($value)
 * @method static Builder<static>|User whereOrdCount($value)
 * @method static Builder<static>|User wherePassword($value)
 * @method static Builder<static>|User wherePhone($value)
 * @method static Builder<static>|User whereRememberToken($value)
 * @method static Builder<static>|User whereSalt($value)
 * @method static Builder<static>|User whereStatus($value)
 * @method static Builder<static>|User whereType($value)
 * @method static Builder<static>|User whereUpdatedAt($value)
 * @method static Builder<static>|User withoutPermission($permissions)
 * @method static Builder<static>|User withoutRole($roles, $guard = null)
 * @mixin Eloquent
 */
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasApiTokens, hasRoles;
    protected $guarded = [];
    protected $appends = ['type'];
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

    public function user_type(): BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }

    public function getTypeAttribute()
    {
        return $this->user_type->name;
    }
}
