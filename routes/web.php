<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

// Route::get('/admin/inputkategori', function () {
//     return view('admin.inputkategori');
// });

Route::get('/admin/inputkategori', [CategoryController::class, 'Index'])
                                        ->name("admin.inputkategori");


Route::post('/admin/inputkategori', [CategoryController::class, 'store'])
                                        ->name('admin.storekategori');


Route::get('/admin/inputpenulis', function () {
    return view('admin.inputpenulis');
});