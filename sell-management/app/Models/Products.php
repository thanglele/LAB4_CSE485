<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Models Sản phẩm
class Products extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $quantity;
}
