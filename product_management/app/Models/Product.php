<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];


    /* display all products */
    public function get_all()
    {
        $products = Product::all();

        return $products;
    }

    public function get_by_id($id)
    {
        $product = Product::find($id);

        return $product;
    }
}
