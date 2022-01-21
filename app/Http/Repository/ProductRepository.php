<?php

namespace App\Http\Repository;
use App\Models\Product;

class ProductRepository{

   

    public function getAllProducts(){
        return Product::all();
    }
}
