<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Resources\Book as BookResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nama', function() {
    return "Bookstore-API";
});
Route::post('deskripsi', function() {
    return "Dokumentasi Bookstore-API";
});
Route::get('category/{id}', function($id){
    $categories = [
        1 => 'Matematika',
        2 => 'Bahasa',
        3 => 'Teknologi'
    ];
    $id = (int) $id;
    if($id==0) return 'Silahkan pilih kategori';
    else return "Anda memilih kategori <b>".$categories[$id]."</b>";
});
Route::get('/book/{id}', function () {
    return 'menampilkan buku';
})->where('id', '[0-9]+');

Route::prefix('v1')->group(function(){
    Route::get('books', 'App\Http\Controllers\BookController@index');
    Route::get('book/{id}', 'App\Http\Controllers\BookController@view')->where('id', '[0-9]+');
    Route::get('categories/random/{count}', 'App\Http\Controllers\CategoryController@Random');
    Route::get('books/top/{count}', 'App\Http\Controllers\BookController@top');
    Route::get('categories','App\Http\Controllers\CategoryController@index');
});