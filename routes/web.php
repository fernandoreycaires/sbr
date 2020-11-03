<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//USUARIOS
Route::get('/usuarios', 'Colaboradores\\UsuariosController@viewUsuarios')->name('usuarios');
Route::get('/usuarios/novo', 'Colaboradores\\UsuariosController@novoUsuario')->name('usuarios.novo');
Route::get('/usuarios/editar/{usuario}', 'Colaboradores\\UsuariosController@editarFormUsuario')->name('usuarios.formedit');
Route::get('/usuarios/{usuario}', 'Colaboradores\\UsuariosController@dadosUsuario')->name('usuarios.dados');
Route::post('/usuarios/salvar', 'Colaboradores\\UsuariosController@salvarUsuario')->name('usuarios.salvar') ;
Route::put('/usuarios/edit/{usuario}', 'Colaboradores\\UsuariosController@editarUsuario')->name('usuarios.editar') ;
Route::delete('/usuarios/destroy/{usuario}', 'Colaboradores\\UsuariosController@deletarUsuario')->name('usuarios.deletar') ;

//COLABORADORES
//COLABORADORES/COLABORADORES
Route::get('/colaboradores', 'Colaboradores\\ColaboradorController@viewColaboradores')->name('colaboradores');
Route::get('/colaboradores/novo', 'Colaboradores\\ColaboradorController@newColaboradores')->name('colaboradores.novo');
Route::post('/colaboradores/inserir', 'Colaboradores\\ColaboradorController@insertColaboradores')->name('colaboradores.inserir');
Route::get('/colaboradores/{colaborador}', 'Colaboradores\\ColaboradorController@dadosColaborador')->name('colaborador.dados');
Route::get('/colaboradores/{colaborador}/editformcolaborador', 'Colaboradores\\ColaboradorController@editformColaborador')->name('colaborador.dados.editformColaborador');
Route::put('/colaboradores/{colaborador}/editcolaborador', 'Colaboradores\\ColaboradorController@editColaborador')->name('colaborador.dados.editColaborador');
//COLABORADORES/ENDEREÇO
Route::get('/colaboradores/{colaborador}/formendereco', 'Colaboradores\\ColaboradorController@formEndereco')->name('colaborador.dados.formEndereco');
Route::post('/colaboradores/{colaborador}/addendereco', 'Colaboradores\\ColaboradorController@addEnderecoColaborador')->name('colaborador.dados.addendereco');
Route::get('/colaboradores/{colaborador}/editformendereco', 'Colaboradores\\ColaboradorController@editformEndereco')->name('colaborador.dados.editformEndereco');
Route::put('/colaboradores/editendereco/{endereco}', 'Colaboradores\\ColaboradorController@editEndereco')->name('colaborador.dados.editEndereco');
Route::delete('/colaboradores/deleteendereco/{endereco}', 'Colaboradores\\ColaboradorController@deleteEndereco')->name('colaborador.endereco.delete');
//COLABORADORES/CONTRATO
Route::get('/colaboradores/{colaborador}/formcontrato', 'Colaboradores\\ColaboradorController@formContrato')->name('colaborador.formContrato');
Route::post('/colaboradores/addcontrato', 'Colaboradores\\ColaboradorController@addContrato')->name('colaborador.addContrato');
Route::get('/colaboradores/{colaborador}/editformcontrato', 'Colaboradores\\ColaboradorController@editFormContrato')->name('colaborador.editFormContrato');
Route::put('/colaboradores/editcontrato/{contrato}', 'Colaboradores\\ColaboradorController@editContrato')->name('colaborador.dados.editContrato');


//PERFIL
Route::get('/perfil', 'Perfil\\PerfilController@viewPerfil')->name('perfil');

//FINANCEIRO
//FECHAMENTOS
Route::get('/fechamentos', 'Financeiro\\FechamentosController@viewFechamentos')->name('fechamentos');
Route::get('/fechamentos/adicionar', 'Financeiro\\FechamentosController@formAdicionar')->name('fechamentos.adicionar');
Route::get('/fechamentos/listar', 'Financeiro\\FechamentosController@listFechamentos')->name('fechamentos.listar');

//DESPESAS
Route::get('/despesas', 'Financeiro\\DespesasController@viewDespesas')->name('despesas');

//INVESTIMENTOS
Route::get('/investimentos', 'Financeiro\\InvestimentosController@viewInvestimentos')->name('investimentos');


//PEDIDOS
Route::get('/pedidos', 'Pedidos\\PedidosController@viewPedidos')->name('pedidos');
