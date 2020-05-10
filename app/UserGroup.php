<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model {

   	protected $table = 'user_group';

   	protected $fillable = [
        'group_name',
        'group_description ',
        'status',
        'date',
    ];
}
