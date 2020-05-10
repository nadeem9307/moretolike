<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model {

   	protected $table = 'ms_product_types';

   	protected $fillable = [
        'type',
        'position ',
        'position_order',
        'status',
        'deleted_status',
        'admin_approval',
        'created_date',
        'updated_date',
    ];
}
