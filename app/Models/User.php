<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'phone',
        'role_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function url($role)
    {
        if ($role == 'client') {
            return $this->id ? 'admin/clients/'.$this->id : 'admin/clients';
        }
        return $this->id ? 'admin/users/'.$this->id : 'admin/users';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password']=Hash::make($password);
    }

    public function isAdmin()
    {
        return $this->role_id == 1;
    }
}
