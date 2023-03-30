<?php namespace App\Models;

use CodeIgniter\Model;

class BitacoraModel extends Model{
    protected $table='dcu_bitacora';
    protected $primaryKey = 'bin_int_id';

    protected $returnType ='array';
    protected $allowedFields=['bin_txt_nombre'];

    protected $useTimeStamps=true;
    protected $createdField='bin_txt_fecharegistro';
    protected $updatedField='bin_txt_fechaactualizacion';

    protected $validationRules=[

        'bin_txt_nombre'=>'required|alpha_space|min_length[3]|max_length[75]'
    ];

    protected $validationMessages=[
        'bin_txt_nombre'=>[
            'valid_nombre'=>'Ingresar nombre'
        ]
    ];

    protected $skipvalidation =false;

}