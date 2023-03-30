<?php namespace App\Models;

use CodeIgniter\Model;

class SoftwareafiliadoModel extends Model{
    protected $table='digitalapi.dcu_sofwareafiliado';
    protected $primaryKey = 'sof_int_id';

    protected $returnType ='array';
    protected $allowedFields=['sof_txt_nombre','sof_txt_alias','sof_txt_descripcion','sof_txt_responsable','sof_txt_dniresponsable','sof_txt_cargoresponsable','sof_txt_contactoresponsable','sof_txt_habilitado','ser_int_id','sof_txt_tokenapi','sof_txt_fecharegistro','sof_txt_fechaactualizacion'];

    protected $useTimeStamps=true;
    protected $createdField='sof_txt_fecharegistro';
    protected $updatedField='sof_txt_fechaactualizacion';

    protected $validationRules=[

    ];

    protected $validationMessages=[

    ];

    protected $skipvalidation =false;

}