<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'category',
        'year',
        'quantity',
    ];

    /**
     * Scope a query to only include books of a given category.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope a query to only include books published in a specific year.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $year
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeYear($query, $year)
    {
        return $query->where('year', $year);
    }

    /**
     * Scope a query to find books with a quantity greater than the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $quantity
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable($query, $quantity)
    {
        return $query->where('quantity', '>', $quantity);
    }
}
