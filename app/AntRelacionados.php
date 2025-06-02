<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class AntRelacionados extends Model
{
   protected $table='antrel';

    protected $primaryKey='idantrel';


    protected $fillable =[
    	'hipertencion',
    	'diabetes',
    	'cardiovasculares',
    	'obesidad',
    	'gastritis',
    	'hepatitis',
    	'nefropatias',
    	'artritis',
    	'convulsiones',
    	'cirugias',
    	'traumaticos',
    	'fimicos',
    	'neoplasias',
    	'hemofilia',
    	'psiquiatricos',
    	'enfsexuales',
    	'plan',
    	'otros',
    	'fur',
    	'alergias',
    	'toxicomanias',
    	'nurgencias_idnurgencias'
    	
        ];

    protected $guarded =[

    	
    ];
}
