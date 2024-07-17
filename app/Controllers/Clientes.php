<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$cliente->findAll();

        return view('clientes',$datos);
    }
}