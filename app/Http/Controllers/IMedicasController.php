<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\NUrgenciasFormRequest;
use eme\NUrgencias;
use eme\Paciente;
use DB;
use Illuminate\Support\Str;
use Alert;

class IMedicasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $nurgencias = DB::table('nurgencias as nu')
        ->join('paciente as p', 'nu.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','nu.idnurgencias','nu.estado','nu.signos_vitales_idsignos_vitales','nu.created_at','nu.ind_medicas')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->orderBy('nu.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.im.imnu.index",["nurgencias" => $nurgencias,"searchText" => $query]);
    

    }

    public function create($idnu,$idp)
    {
        return view('expediente.formatos.im.imnu.create',["paciente" => Paciente::findOrFail($idp)])->with("idnu",$idnu);

    }

    public function store(NUrgenciasFormRequest $request)
    {
        
        //actualizamos la llave foranea de NOta de Urgenccias
        $nu = NUrgencias::findOrFail($request->get('idnu'));
        $nu->ind_medicas = Str::upper($request->get('ind_medicas'));
        $nu->update();
        Alert::success('Agregadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imnu');
    }

    public function show($id)
    {
        //return view("expediente.formatos.im.imnu.show",["nurgencias" => NUrgencias::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('nurgencias')->select('paciente_idpaciente')->where('idnurgencias','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        return view("expediente.formatos.im.imnu.edit",["im" => NUrgencias::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
    }

    public function update(NUrgenciasFormRequest $request,$id)
    {
        $nurgencias = NUrgencias::findOrFail($id);
        $nurgencias->ind_medicas = Str::upper($request->get('ind_medicas'));
        $nurgencias->update();
        Alert::warning('Edición Correcta', 'Indicaciones Médicas');      
        return Redirect::to('expediente/formatos/im/imnu');
    }

    public function destroy($id)
    {
        
        $nurgencias = NUrgencias::findOrFail($id);
        $nurgencias->ind_medicas = NULL;
        $nurgencias->update();
        Alert::info('Eliminadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imnu');
    }
}
