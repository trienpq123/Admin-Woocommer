<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable  implements Authorizable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'team_id',
        'id',
        'created_at',
        'remember_token',
        'provider_name',
        'provider_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'provider_name',
        'provider_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'date:d-m-Y',
    ];

    protected function password() : Attribute{
        return Attribute::make(
            set: fn ($value) => Hash::needsRehash($value) ? Hash::make($value) : $value
        );
    }

    // public function createToken(string $name, array $abilities = ['*'], ?DateTimeInterface $expiresAt = null)
    // {
    //     $token = $this->tokens()->create([
    //         'name' => $name,
    //         'abilities' => $abilities,
    //         'expires_at' => $expiresAt,
    //     ]);
    // }


    public function canDeleteUser()
    {
        $deletePermissions = Permission::where('name', 'like', '%delete%')->pluck('name')->toArray();
        foreach ($deletePermissions as $permission) {
            if ($this->can($permission)) {
                return true;
            }
        }
        return false;
    }


    public function isAdmin(){
        return $this->hasRole('Super Admin');
    }

    public function Teams(){
        return $this->belongsTo(teamsModel::class,'team_id');
    }

    
}
