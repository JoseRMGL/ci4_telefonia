<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\PlanesModel;

class Planes extends BaseController
{
    public function index(): string
    {
        $plan = new PlanesModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$plan->findAll();

        return view('planes',$datos);
    }
}