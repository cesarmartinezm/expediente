<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class NEvolucion extends Model
{
   protected $table='nota_evol';

    protected $primaryKey='idnie';


    protected $fillable =[
    	'hora_c',
    	'triage',
    	'folio',
    	'descripcion',
    	'dactual'
        ];

    protected $guarded =[

    	
    ];
}
