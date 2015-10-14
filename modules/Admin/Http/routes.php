<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/', 'AdminController@index');
        
	Route::get('imovel/', 'ImovelController@index');
	Route::get('imovel/novo', 'ImovelController@form');
	Route::post('imovel/salvar', 'ImovelController@save');
	Route::get('imovel/{id}/editar', 'ImovelController@edit');
	Route::get('imovel/{id}/excluir', 'ImovelController@delete');

        Route::post('imovel-imagem/salvar', 'ImovelImagemController@save');
        Route::get('imovel-imagem/', 'ImovelImagemController@index');

});
        Route::get('bla', function(){
            dd('bla');
        });