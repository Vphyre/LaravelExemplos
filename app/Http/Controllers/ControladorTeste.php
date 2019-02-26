<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorTeste extends Controller
{
    public function getNome(){
        return "Vinicius Paulo";
    }
    
    public function getIdade(){
        return "24 anos";
    }
    
    public function getMult($n1, $n2){
        return $n1 * $n2; 
    }
}
