<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorJournalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewerController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
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

Route::get('/', [HomeController::class,'index']);

//Route::get('/admindashboard', function () {
 //   return view('admindash-board');
//})->middleware(['auth', 'verified'])->name('Admindashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/researcher-dashboard', function () {
  //  return view('researcher-dashboard');
//})->middleware(['auth', 'verified'])->name('researcher-dashboard');

//Route::get('/reviewer-dashboard', function () {
 //   return view('reviewer-dashboard');
//})->middleware(['auth', 'verified'])->name('reviewer-dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin routes

Route::get('/admin/login',[AdminLoginController::class,'showLoginPage'])->name('admin.login');
Route::post('/admin/login',[AdminLoginController::class,'login'])->name('admin.login.submit');

//journal routes

Route::get('/dashboard',[AuthorJournalController::class,'index']);
Route::get('/journals/create',[AuthorJournalController::class,'create']);
Route::get('/journals/{id}',[AuthorJournalController::class,'show']);
Route::post('/journals',[AuthorJournalController::class,'store']);


//Categoris Route

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create']);
Route::get('/category/{id}',[CategoryController::class,'show']);
Route::post('/category',[CategoryController::class,'store']);
Route::get('/category/{id}',[CategoryController::class,'edit']);
Route::post('/category/{id}',[CategoryController::class,'update']);
Route::delete('/delete/{id}',[CategoryController::class,'destroy'])->name('delete.destroy');

//Reviewer Routes

Route::get('/reviewer',[ReviewerController::class,'index']);
