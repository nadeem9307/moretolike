<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

   	protected $table = 'product';
   	protected $primaryKey = 'product_id';
   	protected $fillable = [
        'slug',
        'sku',
        'product_name',
        'availability',
        'actual_price',
        'mrp',
        'current_price',
        'stock_quantity',
        'total_stock_quantity',
        'description',
        'specification',
        'product_details',
        'product_img',
        'user_id',
        'brand_id',
        'discount_type',
        'discount',
        'discount_display_type',
        'shareable_product',
        'status',
        'deleted_status',
        'admin_commission_type',
        'admin_commission',
        'vendor_commission_type',
        'vendor_commission',
        'product_state',
        'country',
        'created_date',
        'updated_date',
        'max_order_qty',
        'category',
        'attributes',
        'purchase_note',
        'visibility',
        'product_status',
        'discount_minimum_quantity',
        'discount_per',
        'weight',
        'length',
        'width',
        'height',
        'o_length',
        'o_width',
        'o_height',
        'e_review'
    ];

    public function brand(){
    	return $this->hasOne('App\Brands','id','brand_id');
    }
    public function category(){
    	return $this->hasOne('App\Category','id','category');
    }
}
