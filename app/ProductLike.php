<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model {

   	protected $table = 'product_like';

   	protected $fillable = [
        'product_id',
        'customer_id ',
        'date'
    ];
}
