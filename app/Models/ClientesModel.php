<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'clientes';
    protected $allowedFields = [
        'cliente_id', 'apellido', 'apellido', 'nombre', 'correo_electronico', 'avenida', 'no_casa', 'zona',
    ];
}