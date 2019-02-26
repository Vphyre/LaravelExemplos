<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    
   public function index() {
        return "Cliente - Raiz";
    }

    public function create() {
        return "Formulario para Cadastrar novo cliente";
    }

    public function store(Request $request) {
        // Armazenar os dados
        $s  = "Armazenar: ";
        $s .= "Nome: "  . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');
        return response($s, 201);
    }

    public function show($id) {
        $v = [ "Mario", "Edson", "Roberto", "Joao" ];
        if ($id < count($v) && $id >= 0)
            return $v[ $id ];
        return "Nao encontrado";
    }

    public function edit($id) {
        return "Formulario para Editar cliente com ID " . $id;
    }

    public function update(Request $request, $id) {
        // Armazenar os dados
        $s  = "Atualizar Cliente com id " . $id . ": ";
        $s .= "Nome: "  . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');
        return response($s, 200);
    }

    public function destroy($id) {
        return response("Apagado Cliente com ID " . $id, 200);
    }
}