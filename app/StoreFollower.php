<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreFollower extends Model {

   	protected $table = 'store_follower';
   	protected $primaryKey = 'pk_follower_id';

   	protected $fillable = [
        'fk_customer_id',
        'fk_vendor_id ',
        'follower_type',
        'follow_date'
    ];
}
