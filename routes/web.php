<?php
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

use Illuminate\Http\Request;
use App\Paciente;
use App\embasa;
use App\Pessoa;
use App\Medicamento;
use App\Notificacao;
use App\Avaliacao;

// pagina inicial da aplicação
Route::get('/', function () {
  
    return view('inicio');
});


// fim


//gerenciar usuarios admin

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');



// gestao usuario








//fim 

//ativador de login obrigatorio
Auth::routes();

//fim

//rotas de notificação para manipular a fichar com controller
Route::get('/avaliacao', 'NotificacaoController@getAvaliacao');
Route::get('/cadastrar/create', 'NotificacaoController@create');
Route::get('/cadastrar', 'NotificacaoController@cadastrar');
Route::get('/inserir', 'NotificacaoController@inserir');
Route::get('/medicamento', 'NotificacaoController@getMedicamentos');
Route::get('/notificacao', 'NotificacaoController@getNotificacao');
Route::get('/testelista',  'NotificacaoController@inserirLista');
Route::get('/validacao', 'AvaliacaoController@index');
Route::post('/cadastrar', 'NotificacaoController@cadastrar');
Route::post('/testelista/cadastrar',  'NotificacaoController@postCadastra');
Route::post('/cadastrar/store', 'NotificacaoController@storeNotificacao');


//fim


//pagina pessoal
Route::get('/home', 'HomeController@index')->name('home');

//fim


//rotas Paciente manipula controlle
Route::get('/inicio', 'PacienteController@index');
Route::get('/inicio/getCor/', 'PacienteController@getCor');
Route::get('/inicio/pega', 'PacienteController@getCor');
//fim


//rotas de Pessoa controller
Route::get('/pessoa/create', 'PessoaController@create');
Route::get('/pessoa', 'PessoaController@index')->name('pessoa');
Route::post('pessoa', 'PessoaController@store');
Route::post('/t1', 'PessoaController@t1');
Route::get('/vt1', 'PessoaController@vt1');
Route::resource('/pessoa/cadastrar', 'PessoaController@create');

//fim


//rota para relatorios fazer controller
Route::get('relatorios', function () {
    
    return view("relatorio");
});
Route::get('teste', function () {
    
$products = App\Medicamento::all();
    return view('teste')->with('products',$products);

   // $listaMedicamentos= ['omeprazol','amonia'];
   // return view("teste", compact('listaMedicamentos'));
});






//paciente

Route::get('paciente', 'PacienteController@index');
Route::get('paciente/{product_id}', 'PacienteController@busca');
Route::put('paciente/{product_id?}', 'PacienteController@update');
Route::delete('paciente/{product_id?}', 'PacienteController@delete');
Route::post('paciente', 'PacienteController@inserir');




// pacientes




Route::get('productajaxCRUD', function () {
    $products = App\Notificacao::all();
    return view('ajax.index')->with('products',$products);
});


Route::get('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Medicamento::find($product_id);
    return response()->json($product);
});
route::post('productajaxCRUD',function(Request $request){   
    $product = App\Medicamento::create($request->input());
    return response()->json($product);
});

Route::put('productajaxCRUD/{product_id?}',function(Request $request,$product_id){
    $product = App\Medicamento::find($product_id);
    $product->nome = $request->name;
    $product->grupo_farmacologico_id = $request->details;
    $product->save();
    return response()->json($product);
});


Route::delete('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Medicamento::destroy($product_id);
    return response()->json($product);
});



Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
