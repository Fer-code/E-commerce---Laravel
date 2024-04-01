<?php

use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Produto2Controller;
use App\Http\Controllers\SiteController;



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


//Rota controller 2 produtos

Route::resource('produtos', Produto2Controller::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('carrinho');

Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('addcarrinho');



 






















// ROTA POR CONTROLLER: Produto Controller
/*

Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name("produto.show");


*/



/* SEGUNDA PARTE DO EXERCICIO

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route("admin.clientes");
});

Route::group([
    'prefix' =>'admin',
    'as' => 'admin.'
], function () {

    Route::get('dashboard', function () {
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function () {
        return "users";
    })->name('users');

    Route::get('clientes', function () {
        return "clientes";
    })->name('clientes');
});
*/

//---------------------------------------------------------------------------------------------

/* PRIMEIRA PARTE DO EXERCICIO




Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function(){
    return "Permite qualquer tipo de acesso HTTP";
});

Route::match((['get','post']),'/match', function(){
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat =""){
return "O id do produto é:".$id."<br>"."A categoria do produto é:".$cat;
});

Route::redirect('/sobre','/empresa');
Route::view('/empresa','site/empresa');

Route::get('/timesnownews', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});*/

