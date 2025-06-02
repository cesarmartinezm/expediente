<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='paciente';

    protected $primaryKey='idpaciente';


    protected $fillable =[

    	'apaterno',
        'amaterno',
        'nomnbre',
        'fnacimiento',
        'nacionalidad',
        'edo_nacimiento',
        'genero',
        'edo_civil',
        'dom_estado',
        'dom_municipio',
        'dom_localidad',
        'dom_calle',
        'dom_numero',
    	'convenio',
        'ocupacion',
        'estado'
    ];

    protected $guarded =[

    	
    ];

public function sic(){
   return $this->hasMany('SolicitudInterconsulta');
}

}