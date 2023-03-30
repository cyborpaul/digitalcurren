<?php

namespace App\Controllers\API;

use App\Models\OperacionesModel;
use CodeIgniter\RESTful\ResourceController;


class Operaciones extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new OperacionesModel());
    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_operaciones; ";
        $queryusuarios = $db->query($sqlusuarios);
        $res['operaciones'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }

    
}
