<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Model Đơn hàng
class Orders extends Model
{
    public $id;
    public $customer_id;
    public $order_date;
    public $status;
}
