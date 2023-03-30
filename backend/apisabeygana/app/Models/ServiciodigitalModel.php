<?php namespace App\Models;

use CodeIgniter\Model;

class ServiciodigitalModel extends Model{
    protected $table='dcu_serviciodigital';
    protected $primaryKey = 'use_int_id';

    protected $returnType ='array';
    protected $allowedFields=['ser_txt_nombre'];

    protected $useTimeStamps=true;
    protected $createdField='ser_txt_fecharegistro';
    protected $updatedField='ser_txt_fechaactualizacion';

    protected $validationRules=[

        'ser_txt_nombre'=>'required|alpha_space|min_length[3]|max_length[75]'
    ];

    protected $validationMessages=[
        'ser_txt_nombre'=>[
            'valid_nombre'=>'Ingresar nombre'
        ]
    ];

    protected $skipvalidation =false;

}