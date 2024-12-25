<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//Model Chi tiết đơn hàng
class Order_detail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity'];

    // Quan hệ n-1 với bảng Orders
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    // Quan hệ n-1 với bảng Products
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
