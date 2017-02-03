<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    
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

    /**
     * Set the user's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords(strtolower($value));
    }

    /**
     * Set the user's city.
     *
     * @param  string  $value
     * @return void
     */
    public function setCityAttribute($value) {
        $this->attributes['city'] = ucwords(strtolower($value));
    }

    /**
     * Set the user's state.
     *
     * @param  string  $value
     * @return void
     */
    public function setStateAttribute($value) {
        $this->attributes['state'] = ucwords(strtolower($value));
    }

    /**
     * Set the user's occupation.
     *
     * @param  string  $value
     * @return void
     */
    public function setOccupationAttribute($value) {
        $this->attributes['occupation'] = ucwords(strtolower($value));
    }


    /**
     * Set the user's name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value) {
        return ucwords(strtolower($value));
    }

    /**
     * get the user's city.
     *
     * @param  string  $value
     * @return string
     */
    public function getCityAttribute($value) {
        return ucwords(strtolower($value));
    }

    /**
     * get the user's state.
     *
     * @param  string  $value
     * @return string
     */
    public function getStateAttribute($value) {
        return ucwords(strtolower($value));
    }

    /**
     * get the user's occupation.
     *
     * @param  string  $value
     * @return string
     */
    public function getOccupationAttribute($value) {
        return ucwords(strtolower($value));
    }
}
