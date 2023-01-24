<?php

use App\Http\Controllers\IKUController;
use App\Models\Kontrak_Manajemen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kontrak_ManajemenController;
use App\Http\Controllers\PerspektifController;

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

Route::get('/kontrak_manajemen', [Kontrak_ManajemenController::class, 'index']);
Route::get('/kontrak_manajemen/create', [Kontrak_ManajemenController::class, 'create']);

Route::get('/iku', [IKUController::class, 'index']);
Route::get('/iku/create', [IKUController::class, 'create']);

