<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return 'NEWS Page here!';
    }
    public function berita($slug){
        return 'This NEWS about '.$slug;
    }
}
