<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

   	protected $table = 'ms_states';

   	protected $fillable = [
        'state_name',
        'country_id '
    ];
}
