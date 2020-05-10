<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	protected $table = 'customers';
	const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
   	protected $fillable = [
        'fk_vendor_id',
        'f_name',
        'l_name',
        'customer_name',
        'email',
        'contact_no',
        'dob', 
        'gender',
        'description',
        'shipping_name',
        'shipping_address1',
        'shipping_address2',
        'shipping_contact',
        'shipping_zipcode',
        'shipping_locality',
        'shipping_country',
        'shipping_state',
        'shipping_city',
        'billing_name',
        'billing_address1',
        'billing_address2',
        'billing_zipcode',
        'billing_contact',
        'billing_locality',
        'billing_country',
        'billing_state',
        'billing_city',
        'profile_image',
        'profile_banner',
        'customer_status',
        'created_date',
        'updated_date',
        'deleted_status',
        'contact_country_code',
        'country',
        'forget_pass_current_timestamp'
    ];
    protected $hidden = [
        'password', 'insta_access_token','stripe_token','forget_pass_token'
    ];

    public function customer_wishlist(){
        return $this->hasMany('App\CustomerWishlist','fk_customer_id');
    }
    public function support_list(){
        return $this->hasMany('App\Support');
    }

    public function reviews(){
        return $this->hasMany('App\Reviews','fk_customer_id');
    }

    public function orders(){
        return $this->hasMany('App\Orders','fk_customer_id');
    }

    public function collection_category(){
        return $this->hasMany('App\CollectionCategory');
    }

}
