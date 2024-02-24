<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index()
    {
        return "Lista de clientes";
    }
    public function show($cliente, $categoria_cliente = "")
    {
        $mensaje = $categoria_cliente != "" ? "y pertenece a la categoria $categoria_cliente" : "";
        return "Este es el cliente $cliente $mensaje";
    }
    public function create()
    {
        return "Aqui veremos un formulario para crear un cliente";
    }
    public function store()
    {
        return "Creacion de clientes";
    }
    public function edit($cliente)
    {
        return "Aqui veremos un formulario para actualizar al cliente $cliente";
    }
    public function update($cliente)
    {
        return "Actualizando al cliente $cliente";
    }
    public function destroy($cliente)
    {
        return "Eliminando al cliente $cliente";
    }
}
