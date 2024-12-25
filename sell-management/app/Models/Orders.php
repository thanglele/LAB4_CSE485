<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//Model Đơn hàng
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'order_date', 'status'];

    // Quan hệ n-1 với bảng Customers
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Quan hệ 1-n với bảng OrderDetails
    public function orderDetails()
    {
        return $this->hasMany(Order_detail::class, 'order_id');
    }
}
