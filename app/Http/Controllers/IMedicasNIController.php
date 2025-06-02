<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\NIEFormrequest;
use eme\NotaIngresoEsp;
use eme\Paciente;
use DB;
use Illuminate\Support\Str;
use Alert;

class IMedicasNIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $ningreso = DB::table('nota_ing_esp as ni')
        ->join('paciente as p', 'ni.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','ni.idnie','ni.estado','ni.signos_vitales_idsignos_vitales','ni.created_at','ind_medicas')
        ->where('p.estado','=','1')
        ->where('ni.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('ni.estado','=','1')
        ->orderBy('ni.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.im.imni.index",["ningreso" => $ningreso,"searchText" => $query]);

    }

    public function create($idni,$idp)
    {
        return view('expediente.formatos.im.imni.create',["paciente" => Paciente::findOrFail($idp)])->with("idni",$idni);

    }

    public function store(NIEFormRequest $request)
    {
        
        //actualizamos la llave foranea de NOta de Urgenccias
        $ningreso = NotaIngresoEsp::findOrFail($request->get('idni'));
        $ningreso->ind_medicas = Str::upper($request->get('ind_medicas'));
        $ningreso->update();
        Alert::success('Agregadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imni');
    }

    public function show($id)
    {
        //return view("expediente.formatos.im.imnu.show",["nurgencias" => NUrgencias::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('nota_ing_esp')->select('paciente_idpaciente')->where('idnie','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        return view("expediente.formatos.im.imni.edit",["im" => NotaIngresoEsp::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
    }

    public function update(NIEFormRequest $request,$id)
    {
        $ningreso = NotaIngresoEsp::findOrFail($id);
        $ningreso->ind_medicas = Str::upper($request->get('ind_medicas'));
        $ningreso->update();    
        Alert::warning('Edición Correcta', 'Indicaciones Médicas');    
        return Redirect::to('expediente/formatos/im/imni');
    }

    public function destroy($id)
    {
        
        $ningreso = NotaIngresoEsp::findOrFail($id);
        $ningreso->ind_medicas = NULL;
        $ningreso->update();
        Alert::info('Eliminadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imni');
    }
}
