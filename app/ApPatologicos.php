<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class ApPatologicos extends Model
{
    protected $table='ap_patologicos';

    protected $primaryKey='idap_patologicos';


    protected $fillable =[
    	'diabetes',
    	'hparterial',
    	'cancer',
    	'oenfermedades',
    	'diagnosticosp',
    	'cirugprevias',
    	'fracturas',
    	'ts',
    	'alergias'
        ];

    protected $guarded =[

    	
    ];
}
