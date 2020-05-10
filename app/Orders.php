<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

   	protected $table = 'orders';
    protected $primaryKey = 'pk_order_id';

   	protected $fillable = [
        'order_no',
        'fk_customer_id ',
        'fk_address_id',
        'fk_payment_type',
        'total_amount',
        'status',
        'payment_status',
        'payment_date',
        'transaction_id',
        'cancelled_status',
        'deliver_date',
        'created_date',
        'update_date'
    ];
}
