<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //1
// Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');

//1
Route::get('/', function () {
    return view('hello', ['nama'=>'Desy Ayurianti']);
})->name('hm');

//2
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames'])->name('meg');
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kidsgames'])->name('mkg');
    Route::get('/riri-story-books', [ProductController::class, 'riristory'])->name('rs');
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkids'])->name('kk');
});

//3
Route::get('/news/{namaberita?}', [NewsController::class, 'news'])->name('nw');

//4
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir'])->name('kr');
    Route::get('/magang', [ProgramController::class, 'magang'])->name('mg');
    Route::get('/kunjungan-industri', [ProgramController::class, 'industri'])->name('ki');
});

//5
Route::get('/home/about-us', [AboutController::class, 'about'])->name('abt');

//6
Route::resource('contact-us',  ContactController::class)->only([
    'index'
]);