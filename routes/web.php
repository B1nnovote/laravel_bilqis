<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Nilaicontroller;
use App\Http\Controllers\ProductController;






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

Route::get('about', function () {
    return "<h2>Ini Halaman About</h2>";
});

Route::get('/contact', function () {
    return "<h2>Ini Halaman Contanct</h2>";
});                   

Route::get('/biodata', function () {
    return "Nama Depan: Bilqis"."<br>".
           "Nama Belakang: Khairunnisa <br>".                                                                                                                                                                                                      
           "Jenis Kelamin : Perempuan <br>". 
           "Tanggal Lahir : 14-03-2008 <br>".
           "Agama : Islam <br>". 
           "Alamat : Bandung <br>". 
           "Telepon : +62 822-9555-9783";

});

// parameter


Route::get('/biodata2/{depan}/{belakang}/{jk}/{tgll}/{agama}/{alamat}/{telepon}', 
function ($nd,$nb,$jk,$tgl_lahir,$agama,$alamat,$telepon) {
    return "Nama Depan: $nd"."<br>".
           "Nama Belakang: $nb <br>".                                                                                                                                                                                                      
           "Jenis Kelamin : $jk <br>". 
           "Tanggal Lahir : $tgl_lahir <br>".
           "Agama : $agama <br>". 
           "Alamat : $alamat <br>". 
           "Telepon : $telepon";

});

   

Route::get('/latihan/{bil1}/{bil2}', 
function ($bil1,$bil2) {
    return "Bilangan 1 : $bil1 <br>".
           "Bilangan 2 : $bil2 <br>".
           "Penjumlahan : ".$bil1+$bil2. "<br>".
           "Penguranagan :". $bil1-$bil2. "<br>".
           "Perkalian :". $bil1*$bil2. "<br>".
           "Pembagian :" .$bil1/$bil2. "<br>";

         
});                                                                                         


Route::get('murid', function () {

    $data_murid = ["Roben","Marsel","Fauzan","Kiranaa","Adit"];
    $data_kelas = ["XI RPL 1","XI RPL 2","XI RPL 3"];

    return view('halaman_murid',compact('data_murid','data_kelas'));
});  


Route::get('/post', function(){

    $posts = Post::all();

    return view('tampil_post',compact('posts'));
});

Route::get('post',[PostsController::class,'menampilkan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//crud
Route::resource('nilai', Nilaicontroller::class);

//crud table produk
Route::resource('produk', ProdukController::class);

//crud table pendaftaran
Route::resource('pendaftaran', PendaftaranController::class);

Route::resource('product', ProductController::class);






