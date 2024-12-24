<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Model Chi tiết đơn hàng
class Order_details extends Model
{
    public $id;
    public $order_id;
    public $product_id;
    public $quantity;
}
