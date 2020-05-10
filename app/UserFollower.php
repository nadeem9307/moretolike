<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollower extends Model {

   	protected $table = 'user_follower';

   	protected $fillable = [
        'follower_id',
        'following_id ',
        'status',
        'date'
    ];
}
