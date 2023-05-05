<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageChangeController;

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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/post-details', function () {
    return view('pages.postDetail');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/contact-data', [pageChangeController::class, 'contactFormData']);
Route::post('/contactForm', [pageChangeController::class, 'contactForm']);
