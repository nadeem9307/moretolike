<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

   	protected $table = 'ms_sub_category';

   	protected $fillable = [
        'menu_id',
        'category_id',
        'name',
        'status',
        'deleted_status',
        'created_date',
        'updated_date',
    ];
}
