<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Career\CareerController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\News\News1Controller;
use App\Http\Controllers\News\News2Controller;
use App\Http\Controllers\News\News3Controller;
use App\Http\Controllers\News\News4Controller;
use App\Http\Controllers\News\NewsController;
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

Route::get('/', [HomeController::class, 'home']);

// Route::get('/home', function () {
//     return view('Pages.home');
// });

// Route::get('/home', [HomeController::class, 'home']);

// Route::get('/tess', [TesController::class, 'tess']);


Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::get('/career', [CareerController::class, 'career']);
Route::post('/career/apply', [CareerController::class, 'apply'])->name('career.apply');

Route::get('/news', [NewsController::class, 'news']);

Route::get('/news/PT.Enlulu-Sukses-Makmur-Memperluas-Operasi-ke-Indonesia-Timur', [News1Controller::class, 'news1']);

Route::get('/news/Solusi-Pencahayaan-LED-Pintar', [News2Controller::class, 'news2']);

Route::get('/news/Kemitraan-Strategis-dengan-Universitas-Terkemuka', [News3Controller::class, 'news3']);

Route::get('/news/Transformasi-Digital-dalam-Industri-Outsourcing', [News4Controller::class, 'news4']);


