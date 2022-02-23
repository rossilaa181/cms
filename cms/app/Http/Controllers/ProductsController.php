<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product1(){
        return'This is Marbel Edu Game';
    }
    public function product2(){
        return'This is Marbel amd Friends Kids Game';
    }
    public function product3(){
        return'This is Riri and Story Books';
    }
    public function product4(){
        return'This is Kolak Kids Song';
    }
}
