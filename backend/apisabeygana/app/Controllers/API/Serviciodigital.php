<?php

namespace App\Controllers\API;

use App\Models\ServiciodigitalModel;
use CodeIgniter\RESTful\ResourceController;


class Serviciodigital extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new ServiciodigitalModel());
    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_serviciodigital;";
        $queryusuarios = $db->query($sqlusuarios);
        $res['serviciodigital'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }
}
