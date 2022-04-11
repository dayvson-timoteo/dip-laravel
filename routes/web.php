<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', 'HomeController@home')->name('site.home');

Route::get('/search', 'SearchController@search')->name('site.search');
Route::post('/search', 'SearchController@searchPost')->name('site.search');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/login', 'LoginController@login')->name('site.login');


//app
Route::prefix('/app')->group(function(){
    Route::get('/cadastro', 'CadastroController@cadastroGet')->name('app.cadastro');
});

Route::prefix('/app')->group(function(){
    Route::post('/cadastro', 'CadastroController@cadastro')->name('app.cadastro');
});

//fallback
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.home').'">clique aqui</a> para ir para página inicial';
});