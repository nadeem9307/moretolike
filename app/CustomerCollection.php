<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCollection extends Model {

   	protected $table = 'customer_collections';

   	protected $fillable = [
        'customer_id ',
        'product_id',
        'type',
        'category',
        'date'
    ];
}
