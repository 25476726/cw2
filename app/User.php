<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
    /*
     *  relation to the role model
     */

/*     public function roles() {
        return $this->belongsToMany(Role::class);
    } */


    /*
     *   check if a role is attached to a user
     */
/*     public function hasRole($role) {
        if (is_string($role)){
            return $this->roles->contains('name', $role);
        }
        return !! $role->intersect($this->roles)->count();
    } */

    /*
     *  assign a role to a user
     */
/*     public function assignRole($role) {
        return $this->roles()->sync(
            Role::whereName($role)->firstOrFail()
        );
    }
} */
