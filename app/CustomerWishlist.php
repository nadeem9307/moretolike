<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerWishlist extends Model {

   	protected $table = 'customer_wishlist';
   	protected $primaryKey = 'pk_cw_id';
   	protected $fillable = [
        'fk_customer_id',
        'fk_product_id',
        'added_date',
    ];
}
