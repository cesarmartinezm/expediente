<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class NUrgencias extends Model
{
    protected $table='nurgencias';

    protected $primaryKey='idnurgencias';


    protected $fillable =[
    	'hconsulta',
    	'triage',
    	'folio',
    	'padecimiento_a',
    	'glasgow',
    	'exp_fisica',
    	'dpresunciales',
    	'indicaciones_med',
    	'hr_llam_esp',
    	'hr_lleg_esp',
    	'med_idmedico',
    	'paciente_idpaciente',
    	'signos_vitales_idsignos_vitales'
        ];

    protected $guarded =[

    	
    ];
}
