<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table='medico';

    protected $primaryKey='idmedico';


    protected $fillable =[

    	'apaterno',
        'amaterno',
        'nomnbre',
        'especialidad',
        'num_cedula',
        'estado'
        ];

    protected $guarded =[

    	
    ];
}
