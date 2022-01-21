<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product_service;

   function __construct() {
    $this->product_service = new ProductService();
  }
    public function get_temporary_changed_products(){

            return $this->product_service->getModifiedProducts();
    }
}
