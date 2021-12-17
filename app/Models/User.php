<?php

namespace App\Models;

use App\Models\Resource\Role;
use App\Models\Resource\Prefix;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Resource\UserPosition;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function prefix() {
        return $this->belongsTo(Prefix::class,'prefix_id','id'); //prefix_id ในตาราง users -> id ในตาราง prefixes
    }

    public function userposition() {
        return $this->belongsTo(UserPosition::class,'user_position_id','id'); //user_position_id ในตาราง users -> id ในตาราง user_positions
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users','role_id','user_id');
    }

    public function getActiveRoleAttribute(){
        return Role::findOrFail(auth()->user()->role_id);
    }
}
