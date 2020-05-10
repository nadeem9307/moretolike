<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model {

   	protected $table = 'support';

   	protected $fillable = [
        'customer_id',
        'shop_id',
        'vendor_id',
        'order_id',
        'title',
        'description',
        'response',
        'status',
        'deleted_status',
        'date'
    ];
}
