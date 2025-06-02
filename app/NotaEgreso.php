<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class NotaEgreso extends Model
{
    protected $table='nota_egreso';

    protected $primaryKey='idne';


    protected $fillable =[
    	'hora_c',
    	'triage',
    	'folio',
    	'descripcion',
    	'degreso'
        ];

    protected $guarded =[

    	
    ];
}
