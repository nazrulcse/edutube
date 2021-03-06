<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'about_me', 'phone', 'country', 'city', 'degree', 'institution', 'avatar', 'user_type', 'occupation', 'charge'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function educations() {
        return $this->hasMany('App\Models\Education');
    }

    public function experiences() {
        return $this->hasMany('App\Models\Experience');
    }

    public function languages() {
        return $this->hasMany('App\Models\Language');
    }

    public function courses() {
        return $this->hasMany('App\Models\Course');
    }
    
    public function blogs()
    {
        return $this->hasMany('App\Blog', 'user_id');
    }

    public function user_bank_account()
    {
        return $this->hasOne('App\Models\UserBankAccount', 'user_id');
    }
}
