<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// PRAKTIKUM 1
// -----------------
// // URL /
// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel"; }) -> name('hello'); //controller: return redirect() -> route('hello')

// // URL /about
// Route::get('/about', function () {
//     echo "NIM   : 2041720026<br>"; 
//     echo "Nama  : Rosi Latansa Salsabela<br>";
//     echo "Kelas : TI-2G";
// }) -> name('about');

// // URL /articles/{id}
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID: ".$id;
//    });

// PRAKTIKUM 2
// -----------------
// URL /
// Route::get('/', [PageController::class,'index']);

// // URL /about
// Route::get('/about', [PageController::class,'about']);

// // URL /articles/{id}
// Route::get('/articles/{id}', [PageController::class,'articles']);

// PRAKTIKUM 2-Modifikasi
// -----------------
// URL /
Route::get('/', [HomeController::class,'index']);

// URL /about
Route::get('/about', [AboutController::class,'index']);

// URL /articles/{id}
Route::get('/articles/{id}', [ArticleController::class,'index']);


// PRAKTIKUM 3
// -----------------
// Halaman Home
Route::get('/home', function () {
    return view('home');
});
// Halaman Products
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'product1']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'product2']);
    Route::get('/riri-story-books', [ProductsController::class, 'product3']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'product4']);
   });
// Halaman News
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{slug}', [NewsController::class, 'berita']);    
   });
// Halaman Program
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'ki']);    
   });
// Halaman About Us
Route::get('/about-us', function () {
    echo "Name  : Rosi Latansa Salsabela<br>";
    echo "Phone : 08223362xxxx<br>";
    echo "Email : 2041720026@student.polinema.ac.id";
}) -> name('about');
