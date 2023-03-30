<?php namespace App\Models;

use CodeIgniter\Model;

class OperacionesModel extends Model{
    protected $table='dcu_operaciones';
    protected $primaryKey = 'ope_int_id';

    protected $returnType ='array';
    protected $allowedFields=['ope_txt_nombre'];

    protected $useTimeStamps=true;
    protected $createdField='ope_txt_fecharegistro';
    protected $updatedField='ope_txt_fechaactualizacion';

    protected $validationRules=[

        'ope_txt_nombre'=>'required|alpha_space|min_length[3]|max_length[75]'
    ];

    protected $validationMessages=[
        'ope_txt_nombre'=>[
            'valid_nombre'=>'Ingresar nombre'
        ]
    ];

    protected $skipvalidation =false;

}