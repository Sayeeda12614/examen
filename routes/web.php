<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/formulibro', function () {
//     return view('formulibro');
// })->name('formulibro');

Route::get('/entrada', [LibrosController::class, 'entrada'])->name('entrada');
Route::get('/index', [LibrosController::class, 'libros'])->name('index');
Route::post("/crearlibro",[LibrosController::class,"crearlibro"])->name("crearlibro");
Route::get("/formulibro",[LibrosController::class,"formulibro"])->name("formulibro");