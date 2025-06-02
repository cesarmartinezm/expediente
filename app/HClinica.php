<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class HClinica extends Model
{
    protected $table='hclinica';

    protected $primaryKey='idhclinica';


    protected $fillable =[
    	'habitacion',
    	'interrogatorio',
    	'padecimiento_actual',
    	'habitus_exterior',
    	'glasgow',
    	'bartell',
    	'cabeza',
    	'ojos',
    	'cuello',
    	'torax',
    	'abdomen',
    	'genitales',
    	'extremidades_t',
    	'extremidades_p',
    	'otros',
    	'diagnostico',
    	'plan',
        ];

    protected $guarded =[

    	
    ];
}
