<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index()
    {
        // return view('index');
        return view('index', ['categories' => category::index()]);
        // return view('index', ['categories' => category::index(), 'count' => category::count()]);
    }
    public function show(){
        return view('productpage');
    }
}
