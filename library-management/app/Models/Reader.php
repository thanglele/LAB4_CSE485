<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    // Define the table associated with the model (optional if it follows Laravel's naming convention)
    protected $table = 'readers';


    // Define the fillable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    // Define the relationship with the Borrow model
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    // Define the relationship with the Book model through the Borrow model
    public function books()
    {
        return $this->hasManyThrough(Book::class, Borrow::class);
    }
}
