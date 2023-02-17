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

Route::get('/perspektif', [PerspektifController::class, 'create']);
Route::post('/perspektif/store', [PerspektifController::class, 'store']);

Route::get('/kontrak_manajemen/index', [Kontrak_ManajemenController::class, 'index']);
Route::get('/kontrak_manajemen/create', [Kontrak_ManajemenController::class, 'create']);
Route::post('/kontrak_manajemen/store', [Kontrak_ManajemenController::class, 'store']);

Route::get('/kontrak_manajemen/eval_index', [Kontrak_ManajemenController::class, 'eval_index']);
Route::get('/kontrak_manajemen/eval_create', [Kontrak_ManajemenController::class, 'eval_create']);
Route::post('/kontrak_manajemen/eval_store', [Kontrak_ManajemenController::class, 'eval_store']);

Route::get('/iku/index', [IKUController::class, 'index']);
Route::get('/iku/create', [IKUController::class, 'create']);
Route::post('/iku/store', [IKUController::class, 'store']);

Route::get('/iku/eval_index', [IKUController::class, 'eval_index']);
Route::get('/iku/eval_create', [IKUController::class, 'eval_create']);
Route::post('/iku/eval_store', [IKUController::class, 'eval_store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/user', [UserController::class, 'edit']);
Route::post('/user/update', [UserController::class, 'update']);

// Route::get('/user/edit', 'UserController@edit')->name('/user/edit');

Route::get('/dbconn', function () {
    return view('dbconn');
});
