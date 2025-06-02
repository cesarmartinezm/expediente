<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class AheredoFamiliares extends Model
{
    protected $table='aheredo_familares';

    protected $primaryKey='idaheredo_familiares';


    protected $fillable =[
    	'diabetes',
    	'exfumador',
    	'hipertension',
    	'exalcoholico',
    	'cancer',
    	'exadicto',
    	'oenfermedades'
        ];

    protected $guarded =[

    	
    ];
}
