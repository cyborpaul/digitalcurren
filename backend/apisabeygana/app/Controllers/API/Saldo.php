<?php

namespace App\Controllers\API;

use App\Models\SaldoModel;
use CodeIgniter\RESTful\ResourceController;


class Saldo extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new SaldoModel());
    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_saldo;";
        $queryusuarios = $db->query($sqlusuarios);
        $res['serviciodigital'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }

    public function recarga(){

        try{
            $usuariorecarga=$this->request->getJSON();
            if($this->model->insert($usuariorecarga)):
                return $this->respondCreated($usuariorecarga);
            else:
                return $this->failValidationError($this->model->validation->listErrors());
            endif;

        }catch(\Exception $e){
            return $this->failServerError('Ha ocurrido un error en el servidor');

        }

    }
}
