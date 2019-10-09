<?php

Route::get('pagseguro-btn', function(){
    
    return view('pagseguro');
    
});

//Aqui é minha rota para o metodo pagseguro na controller PagSeguroController

Route::get('pagseguro', 'PagSeguroController@pagseguro')->name('pagseguro');
  


Route::get('/', function () {
    return view('welcome');
});
