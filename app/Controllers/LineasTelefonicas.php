<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\LineasTelefonicasModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
        $lineasTelefonicas = new LineasTelefonicasModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$lineasTelefonicas->findAll();

        return view('lineas_telefonicas',$datos);
    }
}