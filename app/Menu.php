<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

   	protected $table = 'ms_menu';

   	protected $fillable = [
        'menu_name',
        'status',
        'deleted_status',
        'created_date',
        'updated_date',
    ];
}
