<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class SVitales extends Model
{
    protected $table='signos_vitales';

    protected $primaryKey='idsignos_vitales';


    protected $fillable =[
    	'ta',
    	'fc',
    	'fr',
    	'temp',
    	'peso',
    	'talla'
    	
    ];

    protected $guarded =[

    	
    ];
}
