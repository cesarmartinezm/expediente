<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class SolicitudInterconsulta extends Model
{
    protected $table='sic';

    protected $primaryKey='idsic';


    protected $fillable =[

    	'fsolicitud',
    	'hora',
    	'habitacion',
    	'servicio',
    	'motivo',
    	'servicior',
    	'medicor',
    	'fechar',
    	'horar',
        'medico_idmedico',
        'paciente_idpaciente'
    ];

    protected $guarded =[

    	
    ];

public function paciente(){
   return $this->belongsTo('Paciente');
   }

}


