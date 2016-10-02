<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //TODO: users-tauluun lisättävä pelkän id:n sijasta tiedostonimi, että saa tiedostopäätteen.
    function getProfilePictureURL(){
        if (!empty($this->avatar_id)){
            return 'storage/' . $this->avatar_id;
        }
    }
}
