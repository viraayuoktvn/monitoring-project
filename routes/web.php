<?php

use App\Models\Kontrak_Manajemen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKUController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerspektifController;
use App\Http\Controllers\Kontrak_ManajemenController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/perspektif', [PerspektifController::class, 'index'])->name('perspektif.index');
Route::post('/perspektif/index', [PerspektifController::class, 'filter'])->name('perspektif.filter');
Route::post('/perspektif/delete/{id}', [PerspektifController::class, 'destroy'])->name('perspektif.destroy');
Route::get('/perspektif/edit/{id}', [PerspektifController::class, 'edit'])->name('perspektif.edit');
Route::post('/perspektif/update/{id}', [PerspektifController::class, 'update'])->name('perspektif.update');
Route::get('/perspektif/create', [PerspektifController::class, 'create']);
Route::post('/perspektif/store', [PerspektifController::class, 'store']);

Route::get('/kontrak_manajemen/index', [Kontrak_ManajemenController::class, 'index'])->name('kontrak_manajemen.index');
Route::post('/kontrak_manajemen/index', [Kontrak_ManajemenController::class, 'filter'])->name('kontrak_manajemen.filter');
Route::post('/kontrak_manajemen/delete/{id}', [Kontrak_ManajemenController::class, 'destroy'])->name('kontrak_manajemen.destroy');
Route::get('/kontrak_manajemen/edit/{id}', [Kontrak_ManajemenController::class, 'edit'])->name('kontrak_manajemen.edit');
Route::post('/kontrak_manajemen/update/{id}', [Kontrak_ManajemenController::class, 'update'])->name('kontrak_manajemen.update');
Route::get('/kontrak_manajemen/create', [Kontrak_ManajemenController::class, 'create']);
Route::post('/kontrak_manajemen/store', [Kontrak_ManajemenController::class, 'store']);

Route::get('/kontrak_manajemen/eval_index', [Kontrak_ManajemenController::class, 'eval_index'])->name('kontrak_manajemen.eval_index');
Route::post('/kontrak_manajemen/eval_index', [Kontrak_ManajemenController::class, 'eval_filter'])->name('kontrak_manajemen.eval_filter');
Route::post('/kontrak_manajemen/eval_delete/{id}', [Kontrak_ManajemenController::class, 'eval_destroy'])->name('kontrak_manajemen.eval_destroy');
Route::get('/kontrak_manajemen/eval_edit/{id}', [Kontrak_ManajemenController::class, 'eval_edit'])->name('kontrak_manajemen.eval_edit');
Route::post('/kontrak_manajemen/eval_update/{id}', [Kontrak_ManajemenController::class, 'eval_update'])->name('kontrak_manajemen.eval_update');
Route::get('/kontrak_manajemen/eval_create', [Kontrak_ManajemenController::class, 'eval_create']);
Route::post('/kontrak_manajemen/eval_store', [Kontrak_ManajemenController::class, 'eval_store']);

Route::get('/iku/index', [IKUController::class, 'index'])->name('iku.index');
Route::post('/iku/index', [IKUController::class, 'filter'])->name('iku.filter');
Route::post('/iku/delete/{id}', [IKUController::class, 'destroy'])->name('iku.destroy');
Route::get('/iku/edit/{id}', [IKUController::class, 'edit'])->name('iku.edit');
Route::post('/iku/update/{id}', [IKUController::class, 'update'])->name('iku.update');
Route::get('/iku/create', [IKUController::class, 'create']);
Route::post('/iku/store', [IKUController::class, 'store']);

Route::get('/iku/eval_index', [IKUController::class, 'eval_index']);
Route::post('/iku/eval_delete/{id}', [IKUController::class, 'eval_destroy'])->name('iku.eval_destroy');
Route::get('/iku/eval_edit/{id}', [IKUController::class, 'eval_edit'])->name('iku.eval_edit');
Route::post('/iku/eval_update/{id}', [IKUController::class, 'eval_update'])->name('iku.eval_update');
Route::get('/iku/eval_create', [IKUController::class, 'eval_create']);
Route::post('/iku/eval_store', [IKUController::class, 'eval_store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/dbconn', function () {
    return view('dbconn');
});
