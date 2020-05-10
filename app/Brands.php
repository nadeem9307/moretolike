<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model {

   	protected $table = 'ms_brands';

   	protected $fillable = [
        'name',
        'brand_img',
        'status',
        'deleted_status',
        'created_date',
        'updated_date',
    ];
}
