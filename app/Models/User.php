<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Contracts\AddressableContract;
use App\Traits\Relationships\HasTasks;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasPermissions;
use App\Traits\Relationships\MorphsAddresses;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\Relationships\BelongsToBusinessGroup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail, AddressableContract
{
    use SoftDeletes;
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use HasPermissions;
    use MorphsAddresses;
    use BelongsToBusinessGroup;
    use HasTasks;

    //region CONFIG
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['created_at', 'updated_at'];

    //endregion

    //region ATTRIBUTES

    //endregion

    //region HELPERS
    public function canAccessFilament(): bool
    {
        return $this->hasAnyPermission(['frontend', 'backend']);
    }

    public function isFilamentAdmin()
    {
        return $this->hasPermissionTo('admin');
    }
    //endregion

    //region SCOPES

    //endregion

    //region RELATIONSHIPS
    public function testBookings(): HasMany
    {
        return $this->hasMany(TestBooking::class, 'customer_email', 'email');
    }

    public function testResults(): HasMany
    {
        return $this->hasMany(Document::class, 'customer_email', 'email');
    }

    //endregion
}
