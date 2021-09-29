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


Route::get('/',function(){
    return 'Home';
});

Route::get('/usuarios',function(){
    return 'Usuarios';
});

Route::get('/usuarios/{id}',function($id){
   return 'Mostrando detalle de usuario : '.$id ;
})->where('id','[0-9]+');

Route::get('/usuarios/new',function(){
    return 'Creando usuario nuevo';
});

Route::get('/usuarios/{name}/{nickname?}',function($name,$nickname=null){
    return "Doble ruta {$name} con apodo {$nickname}";
});