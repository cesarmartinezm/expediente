<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class NotaIngresoEsp extends Model
{
    protected $table='nota_ing_esp';

    protected $primaryKey='idnie';


    protected $fillable =[
    	'hora_c',
    	'triage',
    	'folio',
    	'descripcion',
    	'dingreso',
    	'ind_medicas',
    	'medico_idmedico',
    	'paciente_idpaciente',
    	'signos_vitales_idsignos_vitales'
        ];

    protected $guarded =[

    	
    ];
}
