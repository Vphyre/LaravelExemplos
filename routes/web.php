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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ola', function () {
    return "teste de uma nova rota!";
});
Route::get('/ola/teste', function () {
    return "Novo teste!";
});

Route::get('/nome/{nome}', function($nome){
       return "<h1> Olá,$nome</h1>" ;
    });

Route::get('/repetir/{nome}/{x}', function($nome, $x){
    if (is_integer($x))
       {  
       for($i = 0; $i<$x;$i++)
       {
           echo "<h1> Olá,$nome</h1>";
       }
        
}
    else
      echo "Você não digitou um valor inteiro!";
    });

Route::get('/nomecomregra/{nome}/{x}', function($nome, $x){
       for($i = 0; $i<$x;$i++)
       {
           echo "<h1> Olá,$nome</h1>";
       }
    
    })->where('n','[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/nomesemregra/{nome?}', function($nome=null){
    if(isset($nome))
    {
        echo "<h1> Olá,$nome</h1>";
    }
       else
           echo "Não há nome!";
           
     
    
    });

Route::prefix('app') ->group (function(){
    
     Route::get("/", function(){
       return "Pagina principal do app";
         
     });
     Route::get("profile", function(){
       return "profile";
         
     });
     Route::get("about", function(){
       return "about";
         
     });
     
    
    });

Route::redirect('/redirecionar', '/ola', 301);

Route::view('/hello', "hello");

Route::view('/viewnome', "nome", ['nome' =>'Vinicius', 'sobrenome'=>'Paulo']);

Route::get ('/testenome/{nome}/{sobrenome}', function($nome, $sobrenome){
    
    return view('nome', ['nome' =>$nome, 'sobrenome'=>$sobrenome]);
    
});
    
