<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'SiteRossinaController@index');
    Route::get('loja', 'SiteRossinaController@loja');
    Route::get('estamparia_digital', 'SiteRossinaController@estamparia');
    Route::get('camisetas', 'SiteRossinaController@camisetas');
    Route::get('tecidos', 'SiteRossinaController@tecidos');
    Route::get('sobre', 'SiteRossinaController@sobre');
    Route::get('blog', 'SiteRossinaController@blog');
    Route::get('contatos', 'SiteRossinaController@contatos');
    Route::get('faqs', 'SiteRossinaController@faqs');
    Route::get('compras', 'SiteRossinaController@compras');
    Route::get('compras_checkout', 'SiteRossinaController@checkout');
    Route::get('cadastrar', 'SiteRossinaController@registrar');
    Route::get('login', 'SiteRossinaController@login');
    Route::get('username', 'SiteRossinaController@username');
    Route::get('password', 'SiteRossinaController@password');
    Route::get('produto_detalhes', 'SiteRossinaController@detalhe');

Route::group(['prefix' => 'admin', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('painel',['as' => 'painel', 'uses' => 'PainelController@index']);
    Route::get('forms',['as' => 'forms', 'uses' => 'PainelController@forms']);
    Route::get('blank', 'PainelController@blank');
    Route::get('buttons', 'PainelController@buttons');
    Route::get('flot', 'PainelController@flot');
    Route::get('grid', 'PainelController@grid');
    Route::get('icons', 'PainelController@icons');
    Route::get('login', 'PainelController@login');
    Route::get('morris', 'PainelController@morris');
    Route::get('notifications', 'PainelController@notifications');
    Route::get('panels', 'PainelController@panels');
    Route::get('tables', 'PainelController@tables');
    Route::get('typography', 'PainelController@typography');

    Route::get('slide',['as'        => 'slide', 'uses'         => 'SlideController@index']);
    Route::get('slidecriar',['as'   => 'slidecriar', 'uses'    => 'SlideController@create']);
    Route::post('slide',['as'       => 'slide.store', 'uses'   => 'SlideController@store']);
    Route::get('slide/{id}/edit',['as'    => 'slide.edit', 'uses'    => 'SlideController@edit']);
    Route::post('{id}/update',['as' => 'slide.update', 'uses'  => 'SlideController@update']);
    Route::get('{id}/destroy',['as' => 'slide.destroy', 'uses' => 'SlideController@destroy']);

    Route::get('categorias',['as' => 'categorias', 'uses' => 'CategoriasController@index']);
    Route::get('categoriascriar',['as' => 'categoriascriar', 'uses' => 'CategoriasController@create']);
    Route::post('categorias',['as' => 'categoria.store', 'uses' => 'CategoriasController@store']);
    Route::get('categorias/{id}/edit',['as' => 'categoria.edit', 'uses' => 'CategoriasController@edit']);
    Route::post('/{id}/update',['as' => 'categoria.update', 'uses' => 'CategoriasController@update']);
    Route::get('/{id}/destroy',['as' => 'categoria.destroy', 'uses' => 'CategoriasController@destroy']);

});
