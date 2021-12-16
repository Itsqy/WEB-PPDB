<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('auth.login_new');
});
Route::match(['get', 'post'], '/register', function () {
    return redirect('login');
});

//user
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
// Route::get('/dashboard/user', [FormController::class, 'dashboard'])->name('dashboard.user')->middleware('auth');
Route::resource('/guru', GuruController::class)->middleware('auth');
// Route::get('/guru/index/{id}', [GuruController::class, 'index'])->middleware('auth');
Route::get('/formulir', [FormController::class, 'daftar'])->name('daftar');

Route::put('/edit/{id}', [FormController::class, 'updatedata'])->name('update.berkas');
Route::get('/edit', [FormController::class, 'editdata'])->name('edit.berkas');
Route::get('/berkas/{id}', [FormController::class, 'showDetail'])->name('show.berkas');
Route::get('/form/user', [FormController::class, 'showUser'])->name('show.user');
Route::get('/form/before', [FormController::class, 'showbeforenilai'])->name('showbeforenilai');
Route::get('/form', [FormController::class, 'showform'])->name('show.form');
Route::get('/berkastable', [FormController::class, 'showtable'])->name('show.table');
Route::get('/absen', [FormController::class, 'absen'])->name('absen');
Route::post('/insert', [FormController::class, 'insert'])->name('insert');

//edit form
Route::get('/update', [FormController::class, 'edit'])->name('update');

Route::put('/updata/{id}', [FormController::class, 'update'])->name('updata');


//edit file
Route::get('/updatefile', [FormController::class, 'editfile'])->name('editfile');

//download pdf

Route::get('cetakabsen', [PDFController::class, 'generateabsen'])->name('generateabsen');
Route::get('card/{id}', [PDFController::class, 'generatecard'])->name('generatecard');
Route::get('card', [PDFController::class, 'card'])->name('card');
// Route::get('filepdf/{id} ', [PDFController::class, 'halpdf'])->name('halpdf');
Route::get('generate-pdf/{id} ', [PDFController::class, 'generatePDF'])->name('download');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sidebar', [App\Http\Controllers\FormController::class, 'sidebar'])->name('sidebar');
