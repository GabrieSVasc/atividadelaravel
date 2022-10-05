<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;


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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/salvarcadastro', [CadastroController::class,"salvar"]);

Route::get('/', [CadastroController::class, "mostrar"]);

Route::get('/deletar/{id}', [CadastroController::class, 'deletar']);

Route::get('/editar/{id}', [CadastroController::class, 'editar']);

Route::get('/atualizar/{id}', [CadastroController::class, 'atualizar']);