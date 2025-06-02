<?php

namespace eme;

use Illuminate\Database\Eloquent\Model;

class ApNopatologicos extends Model
{
    protected $table='ap_nopatologicos';

    protected $primaryKey='idap_nopatologicos';


    protected $fillable =[
    	'tabaquismo',
    	'alcoholismo',
    	'surbanizacion',
    	'habhigienicos',
    	'habdieteticos',
        ];

    protected $guarded =[

    	
    ];
}
