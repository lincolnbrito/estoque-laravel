<?php

Route::get('/produtos', 'ProdutosController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutosController@mostra')->where('id','[0-9]+');
