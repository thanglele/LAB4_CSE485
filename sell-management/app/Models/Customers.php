<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//Model Khách hàng
class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'email'];

    // Quan hệ 1-n với bảng Orders
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}