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
Route::post('/perspektif/store', [PerspektifController::class, 'store']);


Route::get('/kontrak_manajemen/index', [Kontrak_ManajemenController::class, 'index']);
Route::get('/kontrak_manajemen/create', [Kontrak_ManajemenController::class, 'create']);
Route::post('/kontrak_manajemen/store', [Kontrak_ManajemenController::class, 'store']);

Route::get('/kontrak_manajemen/indexv2', [Kontrak_ManajemenController::class, 'indexv2']);
Route::get('/kontrak_manajemen/createv2', [Kontrak_ManajemenController::class, 'createv2']);
Route::post('/kontrak_manajemen/storev2', [Kontrak_ManajemenController::class, 'storev2']);

Route::get('/iku/index', [IKUController::class, 'index']);
Route::get('/iku/create', [IKUController::class, 'create']);
Route::post('/iku/store', [IKUController::class, 'store']);

Route::get('/iku/indexv2', [IKUController::class, 'indexv2']);
Route::get('/iku/createv2', [IKUController::class, 'createv2']);
Route::post('/iku/storev2', [IKUController::class, 'storev2']);

Route::get('/test', function () {
    return view('test');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});
