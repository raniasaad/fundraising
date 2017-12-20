<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = 'pledges';
    protected $fillable = [
        'one_time', 'monthly', 'duration','start_date',
        'name_d', 'email_d', 'phone_d',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /*protected $hidden = [
         'remember_token'
    ];*/
}