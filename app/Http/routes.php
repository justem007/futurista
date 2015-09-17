<?php

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => '/', 'uses' => 'SiteRossinaController@index']);
    Route::get('loja',['as' => 'loja', 'uses' => 'SiteRossinaController@loja']);
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

    Route::group(['prefix' => 'slide'], function(){
        Route::get('',['as'        => 'slide', 'uses'         => 'SlideController@index']);
        Route::get('slidecriar',['as'   => 'slidecriar', 'uses'    => 'SlideController@create']);
        Route::post('',['as'       => 'slide.store', 'uses'   => 'SlideController@store']);
        Route::get('{id}/edit',['as'    => 'slide.edit', 'uses'    => 'SlideController@edit']);
        Route::post('{id}/update',['as' => 'slide.update', 'uses'  => 'SlideController@update']);
        Route::get('{id}/destroy',['as' => 'slide.destroy', 'uses' => 'SlideController@destroy']);
    });

    Route::group(['prefix' => 'categorias'], function(){
            Route::get('',['as' => 'categorias', 'uses' => 'CategoriasController@index']);
            Route::get('categoriascriar',['as' => 'categoriascriar', 'uses' => 'CategoriasController@create']);
            Route::post('',['as' => 'categoria.store', 'uses' => 'CategoriasController@store']);
            Route::get('{id}/edit',['as' => 'categoria.edit', 'uses' => 'CategoriasController@edit']);
            Route::post('{id}/update',['as' => 'categoria.update', 'uses' => 'CategoriasController@update']);
            Route::get('{id}/destroy',['as' => 'categoria.destroy', 'uses' => 'CategoriasController@destroy']);
    });

    Route::group(['prefix' => 'imagem'], function(){
            Route::get('', ['as' => 'imagem', 'uses' => 'ImagemController@index']);
            Route::get('imagemcriar', ['as' => 'imagemcriar', 'uses' => 'ImagemController@create']);
            Route::post('', ['as' => 'imagem.store', 'uses' => 'ImagemController@store']);
            Route::get('{id}/edit', ['as' => 'imagem.edit', 'uses' => 'ImagemController@edit']);
            Route::post('{id}/update', ['as' => 'imagem.update', 'uses' => 'ImagemController@update']);
            Route::get('{id}/destroy', ['as' => 'imagem.destroy', 'uses' => 'ImagemController@destroy']);
    });

    Route::group(['prefix' => 'menu'], function() {
        Route::get('', ['as' => 'menu', 'uses' => 'MenuController@index']);
        Route::get('menucriar', ['as' => 'menucriar', 'uses' => 'MenuController@create']);
        Route::post('', ['as' => 'menu.store', 'uses' => 'MenuController@store']);
        Route::get('{id}/edit', ['as' => 'menu.edit', 'uses' => 'MenuController@edit']);
        Route::post('{id}/update', ['as' => 'menu.update', 'uses' => 'MenuController@update']);
        Route::get('{id}/destroy', ['as' => 'menu.destroy', 'uses' => 'MenuController@destroy']);
    });

    Route::group(['prefix' => 'blocoum'], function(){
            Route::get('', ['as' => 'blocoum', 'uses' => 'BlocoUmController@index']);
            Route::get('blocoumucriar', ['as' => 'blocoumcriar', 'uses' => 'BlocoUmController@create']);
            Route::post('', ['as' => 'blocoum.store', 'uses' => 'BlocoUmController@store']);
            Route::get('{id}/edit', ['as' => 'blocoum.edit', 'uses' => 'BlocoUmController@edit']);
            Route::post('{id}/update', ['as' => 'blocoum.update', 'uses' => 'BlocoUmController@update']);
            Route::get('{id}/destroy', ['as' => 'blocoum.destroy', 'uses' => 'BlocoUmController@destroy']);
    });
});
