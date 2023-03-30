<?php namespace App\Models;

use CodeIgniter\Model;

class SaldoModel extends Model{
    protected $table='digitalapi.dcu_saldo';
    protected $primaryKey = 'sal_int_id';

    protected $returnType ='array';
    protected $allowedFields=['use_int_id','sal_double_saldo','sal_double_saldousado','sal_txt_fecharegistro','sal_txt_fechaactualizacion','ope_int_id','sal_date_habilitado','ser_int_id'];

    protected $useTimeStamps=true;
    protected $createdField='sal_txt_fecharegistro';
    protected $updatedField='sal_txt_fechaactualizacion';

    protected $validationRules=[

        
    ];

    protected $validationMessages=[

    ];

    protected $skipvalidation =false;

}