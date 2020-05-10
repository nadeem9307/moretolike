<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

   	protected $table = 'ms_countries';

   	protected $fillable = [
        'sortname',
        'country_name ',
        'phonecode'
    ];
}
