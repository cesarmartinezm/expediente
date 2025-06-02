<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\SVitales;
use eme\NEvolucion;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\SVitalesFormRequest;
use DB;
use Alert;

class SVitalesNEController extends Controller
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
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','ne.idnie','ne.estado','ne.signos_vitales_idsignos_vitales','ne.created_at')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->orderBy('ne.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.svitales.nev.index",["nevolucion" => $nevolucion,"searchText" => $query]);

    }

    public function create($idne,$idp)
    {
       $paciente = DB::table('paciente')->select('idpaciente','apaterno','amaterno','nombre')->where('idpaciente','=',$idp)
       ->get();
        return view('expediente.formatos.svitales.nev.create',["paciente" => Paciente::findOrFail($idp)])->with("idne",$idne);

    }

    public function store(SVitalesFormRequest $request)
    {
        
        $svitales = new SVitales;
        $svitales->ta = $request->get('ta');
        $svitales->fc = $request->get('fc');
        $svitales->fr = $request->get('fr');
        $svitales->sao2 = $request->get('sao2');
        $svitales->temp = $request->get('temp');
        $svitales->peso = $request->get('peso');
        $svitales->talla = $request->get('talla');
        $svitales->paciente_idpaciente = $request->get('idpaciente');
        $svitales->tipo = '3';
        $svitales->estado = '1';
        $svitales->save();
        //actualizamos la llave foranea de NOta de Urgenccias
        $ne = NEvolucion::findOrFail($request->get('idne'));
        $ne->signos_vitales_idsignos_vitales = $svitales->idsignos_vitales;
        $ne->update();
        Alert::success('Agregados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/nev');
    }

    public function show($id)
    {
        return view("expediente.formatos.svitales.nev.show",["svitales" => SVitales::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('signos_vitales')->select('paciente_idpaciente')->where('idsignos_vitales','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        $paciente = DB::table('paciente')->select('apaterno','amaterno','nombre')->where('idpaciente','=',$s)->get();
        return view("expediente.formatos.svitales.nev.edit",["svitales" => SVitales::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
    }

    public function update(SVitalesFormRequest $request,$id)
    {
        $svitales = Svitales::findOrFail($id);
        $svitales->ta = $request->get('ta');
        $svitales->temp = $request->get('temp');
        $svitales->fc = $request->get('fc');
        $svitales->fr = $request->get('fr');
        $svitales->sao2 = $request->get('sao2');
        $svitales->peso = $request->get('peso');
        $svitales->talla = $request->get('talla');
        $svitales->update();
        Alert::warning('Edición Correcta', 'Signos Vitales');     
        return Redirect::to('expediente/formatos/svitales/nev');
    }

    public function destroy($id)
    {
        $ne = DB::table('nota_evol')->select('idnie')->where('signos_vitales_idsignos_vitales','=',$id)->get();
            foreach ($ne as $ne ) {
            $ne = $ne->idnie;
            }
        $n = NEvolucion::findOrFail($ne);
        $n->signos_vitales_idsignos_vitales = NULL;
        $n->update();
        $svitales = SVitales::findOrFail($id);
        $svitales->delete();
        Alert::info('Eliminados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/nev');
    }
}
