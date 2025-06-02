<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\NEvolucionFormrequest;
use eme\NEvolucion;
use eme\Paciente;
use DB;
use Illuminate\Support\Str;
use Alert;

class IMedicasNEVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $nevolucion = DB::table('nota_evol as ne')
        ->join('paciente as p', 'ne.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno', 'p.nombre','ne.idnie', 'ne.estado','ne.signos_vitales_idsignos_vitales', 'ne.created_at', 'ind_medicas')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->orderBy('ne.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.im.imnev.index",["nevolucion" => $nevolucion,"searchText" => $query]);

    }

    public function create($idnev,$idp)
    {
        return view('expediente.formatos.im.imnev.create',["paciente" => Paciente::findOrFail($idp)])->with("idnev",$idnev);
    }

    public function store(NEvolucionFormRequest $request)
    {
        
        //actualizamos la llave foranea de NOta de Urgenccias
        $nevolucion = NEvolucion::findOrFail($request->get('idnev'));
        $nevolucion->ind_medicas = Str::upper($request->get('ind_medicas'));
        $nevolucion->update();
        Alert::success('Agregadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imnev');
    }

    public function show($id)
    {
        //return view("expediente.formatos.im.imnu.show",["nurgencias" => NUrgencias::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('nota_evol')->select('paciente_idpaciente')->where('idnie','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        return view("expediente.formatos.im.imnev.edit",["im" => NEvolucion::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
    }

    public function update(NEvolucionFormRequest $request,$id)
    {
        $nevolucion = NEvolucion::findOrFail($id);
        $nevolucion->ind_medicas = Str::upper($request->get('ind_medicas'));
        $nevolucion->update();
        Alert::warning('Edición Correcta', 'Indicaciones Médicas');    
        return Redirect::to('expediente/formatos/im/imnev');
    }

    public function destroy($id)
    {
        
        $nevolucion = NEvolucion::findOrFail($id);
        $nevolucion->ind_medicas = NULL;
        $nevolucion->update();
        Alert::info('Eliminadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imnev');
    }
}
