<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\ComentarioController;
use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

// Route::get('/info', function () {
//     return "HOLA MUNDO";
// });

Route::get('/info/{tipo?}', [SitioController::class, 'info']);

// Route::get('/comentario/create',  [ComentarioController::class, 'create']);
// Route::post('/comentario-guarda', [ComentarioController::class, 'store'] );
Route::resource('comentario', ComentarioController::class);