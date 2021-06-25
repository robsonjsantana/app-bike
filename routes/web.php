<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('auth.login');
});


######################################### ROTA DASHBOARD ########################################
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('/dashboard');

######################################### //.ROTA DASHBOARD #####################################

######################################### ROTA CLIENTE ########################################
Route::get('/cadastrar-cliente', [ClienteController::class, 'create'])->middleware(['auth'])->name('cadastrar-cliente');
Route::post('/cliente-store', [ClienteController::class, 'store'])->middleware(['auth'])->name('cliente-store');
Route::post('/cliente-modal-store', [ClienteController::class, 'modalStore'])->middleware(['auth'])->name('cliente-modal-store');
Route::get('/listar-cliente', [ClienteController::class, 'index'])->middleware(['auth'])->name('listar-cliente');
Route::get('/show-cliente/{id}', [ClienteController::class, 'show'])->middleware(['auth'])->name('/view-cliente/{id}');
Route::get('/edit-cliente/{id}', [ClienteController::class, 'edit'])->middleware(['auth'])->name('/edit-cliente/{id}');
Route::post('/destroycliente/{id}', [ClienteController::class, 'destroy'])->middleware(['auth'])->name('/destroycliente');
Route::put('/atualizar-cliente/{id}', [ClienteController::class, 'update'])->middleware(['auth'])->name('/atualizar-cliente');


######################################### //.ROTA CLIENTE #####################################

######################################### ROTA ALUGUEIS ########################################
Route::get('/alugar-produto', [ProdutoController::class, 'create'])->middleware(['auth'])->name('alugar-produto');
Route::post('/produto-store', [ProdutoController::class, 'store'])->middleware(['auth'])->name('produto-store');
Route::get('/listar-alugueis', [ProdutoController::class, 'index'])->middleware(['auth'])->name('listar-alugueis');
Route::get('/show-alugueis/{id}', [ProdutoController::class, 'show'])->middleware(['auth'])->name('/show-alugueis/{id}');
Route::put('/produto-update/{id}', [ProdutoController::class, 'update'])->middleware(['auth'])->name('/produto-update');
Route::get('/encerrar-aluguel/{id}', [ProdutoController::class, 'edit'])->middleware(['auth'])->name('/encerrar-aluguel/{id}');

######################################### //.ROTA ALUGUEIS ####################################


require __DIR__.'/auth.php';
