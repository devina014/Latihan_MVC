<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
 return "Hello World";
});
Route::get('/user', function () {
 return "Hello User";
});

// routes/web.php
Route::get('/form-produk', function () {
 return view('form-produk');
});

// routes/web.php
use Illuminate\Http\Request;
Route::post('/kirim-produk', function (Request $request) {
 $nama = $request->input('nama');
 $harga = $request->input('harga');
 $kategori = $request->input('kategori');
 return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b>
termasuk kategori <b>$kategori</b> berhasil dikirim!";
});

// routes/web.php
Route::get('/produk/edit', function () {
 return view('edit-produk');
});

// routes/web.php
Route::put('/produk/update', function (Request $request) {
 $namaBaru = $request->input('nama');
 $hargaBaru = $request->input('harga');
 $kategoriBaru = $request->input('kategori');
 return "Data produk berhasil diperbarui menjadi:<br>
 <b>Nama:</b> $namaBaru <br>
 <b>Harga:</b> Rp$hargaBaru <br>
 <b>Kategori:</b> $kategoriBaru";
});

Route::get('/profil/{vina}', function ($vina) {
return "Halo, ini adalah profil milik: <b>$vina</b>";
});

Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

Route::get('/profil/{vina}', function ($vina) {
return view('profil', ['vina' => $vina]);
});


// Halaman utama (daftar link tiket)
Route::get('/', function () {
    return view('welcome_tiket');
});

// Halaman detail tiket berdasarkan parameter
Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => $tempat,
        'harga' => $harga
    ]);
});
