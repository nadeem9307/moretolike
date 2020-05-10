<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

   	protected $table = 'reviews';

   	protected $fillable = [
        'ref_id',
        'fk_customer_id ',
        'rating',
        'comment',
        'review_type',
        'admin_approval',
        'created_date',
        'updated_date',
    ];
}
