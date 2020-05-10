<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

   	protected $table = 'ms_category';

   	protected $fillable = [
        'menu_id',
        'category_name',
        'category_order',
        'status',
        'deleted_status',
        'created_date',
        'updated_date',
    ];
}
