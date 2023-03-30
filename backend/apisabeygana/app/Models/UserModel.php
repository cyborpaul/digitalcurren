<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table='digitalapi.dcu_usuario';
    protected $primaryKey = 'use_int_id';

    protected $returnType ='array';
    protected $allowedFields=['use_txt_nombre','use_txt_apellido','use_txt_direccion','use_txt_telefono','use_int_dni','use_txt_email','use_txt_distrito','use_txt_provincia','use_txt_departamento','use_txt_password','use_txt_habilitado','rol_int_id','use_txt_fecharegistro','use_txt_fechaactualizacion'];

    protected $useTimeStamps=true;
    protected $createdField='use_txt_fecharegistro';
    protected $updatedField='use_txt_fechaactualizacion';

    protected $validationRules=[

        'use_txt_nombre'=>'required|alpha_space|min_length[3]|max_length[75]',
        'use_txt_apellido'=>'required|alpha_space|min_length[3]|max_length[75]',
        'use_txt_direccion'=>'required|min_length[3]|max_length[75]'
    ];

    protected $validationMessages=[
        'use_txt_nombre'=>[
            'valid_nombre'=>'Ingresar nombre'
        ]
    ];

    protected $skipvalidation =false;

}