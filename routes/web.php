<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

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

Route::get('inicio', function() {
    return view('inicio');
});

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('pedido/{pedido}/agrega-envio', [PedidoController::class, 'agregaEnvio'])->name('pedido.agrega-envio');
Route::resource('pedido', PedidoController::class);//->middleware('auth');