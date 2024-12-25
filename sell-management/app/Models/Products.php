<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//Models Sản phẩm
class Products extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'quantity'];

    // Quan hệ n-n với bảng Orders thông qua bảng OrderDetails
    public function orders()
    {
        return $this->belongsToMany(Orders::class, 'order_details', 'product_id', 'order_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public $id;
    public $name;
    public $description;
    public $price;
    public $quantity;

}
