<?php

namespace App\Controllers\API;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;


class User extends ResourceController
{
    public function __construct(){
        $this->model=$this->setModel(new UserModel());

    }
    public function index()
    {
        $db = db_connect();
        $sqlusuarios="SELECT * FROM digitalapi.dcu_usuario
        ORDER BY use_int_id ASC ";
        $queryusuarios = $db->query($sqlusuarios);
        $res['usuarios'] = $queryusuarios->getResultArray();
        return $this->respond($res);
    }

    public function register(){
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

    public function main(){
        $db = db_connect();
        $sqlusuarios="SELECT count(*) as cantidad
        FROM digitalapi.dcu_usuario
        WHERE use_txt_fecharegistro >= NOW() - INTERVAL '24 hours' limit 20;";
        $queryusuarios = $db->query($sqlusuarios);

        $sqlmovimientos="SELECT count(*) as cantidad
        FROM digitalapi.dcu_saldo
        WHERE sal_txt_fecharegistro >= NOW() - INTERVAL '24 hours' limit 20;";
        $querymovimientos = $db->query($sqlmovimientos);

        $sqleventos="SELECT count(*) as cantidad
        FROM digitalapi.dcu_bitacora
        WHERE bin_txt_fecharegistro >= NOW() - INTERVAL '24 hours' limit 20;";
        $queryeventos = $db->query($sqleventos);


        $sqlsaldomovimientos="SELECT * FROM digitalapi.dcu_saldo
		INNER JOIN digitalapi.dcu_usuario du ON du.use_int_id = dcu_saldo.use_int_id
		INNER JOIN digitalapi.dcu_operaciones dop ON dop.ope_int_id = dcu_saldo.ope_int_id;";
        $querysaldomovimientos = $db->query($sqlsaldomovimientos);

        $res['usuariosregistrados'] = $queryusuarios->getResultArray();
        $res['movimientosregistrados'] = $querymovimientos->getResultArray();
        $res['eventosregistrados'] = $queryeventos->getResultArray();
        $res['saldomovimientos'] = $querysaldomovimientos->getResultArray();
        return $this->respond($res);
        

        

    }




}
