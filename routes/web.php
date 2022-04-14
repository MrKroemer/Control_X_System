<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('teste', function(){
    return '<h2>Testando rota utilizando a forma antiga</h2>';
});

Auth::routes();


//Route::get('/home',              [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin',              [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
Route::get('/lista',             [App\Http\Controllers\ListaController::class, 'lista'])->name('lista');


/* ##############################  ADMINISTRAÇÂO DO SISTEMA ########################################################## */

//Rotas de controles de acesso e permissões.
Route::get('/usuarios',          [App\Http\Controllers\UsuariosController::class, 'users'])->name('usuarios');
Route::get('/grupos',            [App\Http\Controllers\GruposController::class, 'grupos'])->name('grupos_de_usuarios');
Route::get('modulos',            [\App\Http\Controllers\ModulosController::class, 'modulos'])->name('modulos');


//Rotas de estruturas físicas.
Route::get('filiais',            [App\Http\Controllers\FiliaisController::class, 'filiais'])->name('filiais');
Route::get('setores',            [App\Htto\Controllers\SetoresController::class, 'setores'])->name('setores');
Route::get('tanques',            [App\Http\Controllers\TanquesController::class, 'tanques'])->name('tanques');

//Relatório de permissões de acesso.
Route::get('/permissoes',        [App\Http\Controllers\PermissoesController::class, 'permissoes'])->name('permisssoes_de_acesso');
Route::get('/atividades',        [App\Http\Controllers\AtividadesController::class, 'atividades'])->name('atividades');

/* #################################################################################################################### */


/* ##############################  ALMOXARIFADO ########################################################## */
 
Route::get('/almoxarifado',      [App\Http\Controllers\AlmoxarifadoController::class, 'almoxarifado'])->name('almoxarifado');

//Rotas de controle de acesso ao menu e permissõesd de usuarios.
Route::get('/menu',              [App\Httpz\Controllers\MenuController::class, 'menu'])->name('menu');

//Rotas do moddulo "Cadastros básicos".
Route::get('clientes',           [App\Http\Controllers\ClientesFornecedoresController::class, 'clientes_fornecedores'])->name('clientes_fornecedores');
Route::get('gruposrateios',      [App\Http\Controllers\GruposRateiosController::class, 'grupos_rateios'])->name('grupos_rateios');
Route::get('produtos',           [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('produtos');
Route::get('taxascustos',        [App\Http\Controllers\TaxasCustosConttroller::class, 'taxascustos'])->name('taxascustos');


//Rotas para movimentações de estoque.
Route::get('arquivoexportacoes', [App\Http\Controller\ArquivoExportacoesController::class, 'arquivoexportacoes'])->name('arquivoexportacoes');
Route::get('arquivoimportacoes', [App\Http\Controller\ArquivoImportacoesController::class, 'arquivoimportacoes'])->name('arquivoimportacoes');
Route::get('estoquedisponivel',  [App\Http\Controllers\EstoqueController::class, 'estoquedisponivel'])->name('estoquedisponivel');
Route::get('historicodeentrada', [App\Http\Controllers\HistoricoEntradaController::class, 'historicoentrada'])->name('historicoentrada');
Route::get('historicoestorno',   [App\Http\Controllers\HistoricoEstonro::class, 'historicoestorno'])->name('historicoestorno');




/* #################################################################################################################### */




