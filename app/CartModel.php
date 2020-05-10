<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model {

   	protected $table = 'cart';
    protected $primaryKey = 'pk_cart_id';

   	protected $fillable = [
        'fk_user_id',
        'cart_id ',
        'quantity',
        'product_name',
        'product_attributes',
        'product_price',
        'fk_product_id',
        'fk_order_id',
        'refund_status',
        'shipping_status',
        'status',
        'created_date',
        'updated_date'
    ];
}
