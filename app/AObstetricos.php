<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class AObstetricos extends Model
{
    protected $table='aobtetricos';

    protected $primaryKey='idaobtetricos';


    protected $fillable =[
    	'menarca',
    	'gesta',
    	'para',
    	'fup',
    	'abortos',
    	'cesareas',
    	'fur',
    	'meplafam'
        ];

    protected $guarded =[

    	
    ];
}
