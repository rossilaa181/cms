<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id){
        return "Ini adalah halaman Artikel dengan ID: ".$id;
    }
}
