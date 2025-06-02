<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\NotaEFormrequest;
use eme\NotaEgreso;
use DB;
use eme\Paciente;
use Illuminate\Support\Str;
use Alert;

class IMedicasNEController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $negreso = DB::table('nota_egreso as neg')
        ->join('paciente as p', 'neg.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','neg.idne','neg.estado','neg.signos_vitales_idsignos_vitales','neg.created_at','ind_medicas')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->orderBy('neg.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.im.imne.index",["negreso" => $negreso,"searchText" => $query]);

    }

    public function create($idne,$idp)
    {
        return view('expediente.formatos.im.imne.create',["paciente" => Paciente::findOrFail($idp)])->with("idne",$idne);

    }

    public function store(NotaEFormRequest $request)
    {
        
        //actualizamos la llave foranea de NOta de Urgenccias
        $negreso = NotaEgreso::findOrFail($request->get('idne'));
        $negreso->ind_medicas = Str::upper($request->get('ind_medicas'));
        $negreso->update();
        Alert::success('Agregadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imne');
    }

    public function show($id)
    {
        //return view("expediente.formatos.im.imnu.show",["nurgencias" => NUrgencias::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('nota_egreso')->select('paciente_idpaciente')->where('idne','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        return view("expediente.formatos.im.imne.edit",["im" => NotaEgreso::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
    }

    public function update(NotaEFormRequest $request,$id)
    {
        $negreso = NotaEgreso::findOrFail($id);
        $negreso->ind_medicas = Str::upper($request->get('ind_medicas'));
        $negreso->update();
        Alert::warning('Edición Correcta', 'Indicaciones Médicas');       
        return Redirect::to('expediente/formatos/im/imne');
    }

    public function destroy($id)
    {
        
        $negreso = NotaEgreso::findOrFail($id);
        $negreso->ind_medicas = NULL;
        $negreso->update();
        Alert::info('Eliminadas Correctamente', 'Indicaciones Médicas');
        return Redirect::to('expediente/formatos/im/imne');
    }
}
