<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
  
    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);
    Route::get('/',[\App\Http\Controllers\UserController::class,'index']);
    Route::get('/setting', [\App\Http\Controllers\UserController::class,'setting']);
    Route::resource('wishlist',App\Http\Controllers\WishlistController::class);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','level:admin']], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource('kategori',\App\Http\Controllers\KategoriController::class);
    Route::resource('produk',\App\Http\Controllers\ProdukController::class);
    Route::post('imagekategori',[\App\Http\Controllers\KategoriController::class,'uploadimage']);
    Route::delete('imagekategori/{id}',[\App\Http\Controllers\KategoriController::class,'deleteimage']);
    Route::post('produkimage',[\App\Http\Controllers\ProdukController::class,'uploadimage']);
    Route::delete('produkimage/{id}',[\App\Http\Controllers\ProdukController::class,'deleteimage']);
    Route::post('image', [\App\Http\Controllers\ImageController::class,'index']);
    Route::get('image', [\App\Http\Controllers\ImageController::class,'index']);
    Route::post('image', [\App\Http\Controllers\ImageController::class,'store']);
    Route::delete('image/{id}',[\App\Http\Controllers\ImageController::class,'destroy']);
    Route::resource('slideshow',\App\Http\Controllers\SlideshowController::class);
    Route::resource('promo',\App\Http\Controllers\ProdukPromoController::class);
    Route::get('loadprodukasync/{id}',[\App\Http\Controllers\ProdukPromoController::class,'loadasync']);
    Route::get('laporan',[\App\Http\Controllers\LaporanController::class,'index']);
    Route::get('proseslaporan',[\App\Http\Controllers\LaporanController::class,'proses']);
    Route::resource('customer',\App\Http\Controllers\CustomerController::class);
    
});
//Route::get('/home', [\App\Http\Controllers\HomepageController::class,'index'])->name('home');
Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kontak', [\App\Http\Controllers\HomepageController::class,'kontak']);
Route::get('/login', [\App\Http\Controllers\HomepageController::class,'login']);
Route::get('/produk', [\App\Http\Controllers\HomepageController::class,'produk']);
Route::get('/produk/{id}', [\App\Http\Controllers\HomepageController::class,'produkdetail']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/kategori/{slug}', [\App\Http\Controllers\HomepageController::class,'kategoribyslug']);
Route::resource('alamatpengiriman',App\Http\Controllers\AlamatPengirimanController::class);
Route::get('checkout', [\App\Http\Controllers\CartController::class,'checkout']);
Route::get('transaksi', [\App\Http\Controllers\TransaksiController::class,'transaksi']);
Route::get('/produkdetail/{id}',  [\App\Http\Controllers\HomepageController::class,'produkdetail']);
Route::resource('cart', App\Http\Controllers\CartController::class);
Route::patch('kosongkan/{id}',[\App\Http\Controllers\CartController::class,'kosongkan']);
Route::resource('cartdetail', App\Http\Controllers\CartDetailController::class);
Route::get('checkout',[\App\Http\Controllers\CartController::class,'checkout']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('cart', App\Http\Controllers\CartController::class);
Route::patch('kosongkan/{id}',[\App\Http\Controllers\CartController::class,'kosongkan']);
Route::resource('cartdetail', App\Http\Controllers\CartDetailController::class);

Route::get('/home', function() {
    return redirect('/admin');
});