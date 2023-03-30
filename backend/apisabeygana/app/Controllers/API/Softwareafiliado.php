<?php

namespace App\Controllers\API;

use App\Models\SoftwareafiliadoModel;
use CodeIgniter\RESTful\ResourceController;


class Softwareafiliado extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new SoftwareafiliadoModel());
    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_sofwareafiliado;";
        $queryusuarios = $db->query($sqlusuarios);
        $res['softwareafiliado'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }


    public function registrar(){
        try{
            $softwareafiliado=$this->request->getJSON();
            if($this->model->insert($softwareafiliado)):
                return $this->respondCreated($softwareafiliado);
            else:
                return $this->failValidationError($this->model->validation->listErrors());
            endif;

        }catch(\Exception $e){
            return $this->failServerError('Ha ocurrido un error en el servidor');

        }


    }
}
