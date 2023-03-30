<?php

namespace App\Controllers\API;


use CodeIgniter\RESTful\ResourceController;


class Bitacora extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new BitacoraModel());
    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_bitacora;";
        $queryusuarios = $db->query($sqlusuarios);
        $res['bitacora'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }
}
