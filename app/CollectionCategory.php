<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionCategory extends Model {

   	protected $table = 'collection_category';

   	protected $fillable = [
        'collection_category_name',
        'customer_id ',
    ];
}
