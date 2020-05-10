<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorCollections extends Model {

   	protected $table = 'vendor_collections';

   	protected $fillable = [
        'user_id',
        'collection_name ',
        'products_data',
        'status',
        'deleted_status',
        'date'
    ];
}
