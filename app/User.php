<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        // 'f_name','l_name','user_name','password', 'email', 'contact_no','gender','country1','state1','city1','billing_address1','profile_image'

        'customer_id',
        'created_by',
        'f_name',
        'l_name',
        'user_name',
        'email',
        'contact_country_code',
        'contact_no',
        'profile_image',
        'role',
        'user_status',
        'deleted_status',
        'website',
        'store_banner',
        'store_name',
        'store_url',
        'store_logo',
        'address1',
        'address2',
        'city',
        'zip_code',
        'country',
        'state',
        'phone_no',
        'facebook',
        'youtube',
        'instagram',
        'paypal_email',
        'api_token',
        'created_date',
        'updated_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *

     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
