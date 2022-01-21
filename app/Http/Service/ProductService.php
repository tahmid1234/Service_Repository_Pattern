<?php

namespace App\Http\Service;

use App\Http\Repository\ProductRepository;

class ProductService{

   public $product_repos;

   function __construct() {
    $this->product_repos = new ProductRepository;
  }


    public function getModifiedProducts(){
        $product_list = $this->product_repos->getAllProducts();
        foreach($product_list as $product ){
            $product->name = "kola";
        }
        return  $product_list;
    }

}
