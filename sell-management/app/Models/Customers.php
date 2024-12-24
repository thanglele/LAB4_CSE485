<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Model Khách hàng
class Customers extends Model
{
    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
}
