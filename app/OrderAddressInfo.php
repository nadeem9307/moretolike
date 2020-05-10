<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddressInfo extends Model {
	protected $table = 'order_address_info';
	const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
   	protected $fillable = [
        'pk_address_id',
        'fk_customer_id',
        'billing_first_name',
        'billing_last_name',
        'billing_company',
        'billing_email',
        'billing_phone', 
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_postcode',
        'fk_billing_country',
        'billing_country_code',
        'ship_to_different_address',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_company',
        'shipping_email',
        'shipping_phone',

        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'fk_shipping_country',
        'shipping_country_code',
        'created_date',
        'updated_date'
    ];
}
