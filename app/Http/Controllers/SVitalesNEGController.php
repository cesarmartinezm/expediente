<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\SVitales;
use eme\NotaEgreso;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\SVitalesFormRequest;
use DB;
use Alert;

class SVitalesNEGController extends Controller
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
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','neg.idne','neg.estado','neg.signos_vitales_idsignos_vitales','neg.created_at')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->orderBy('neg.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.svitales.negs.index",["negreso" => $negreso,"searchText" => $query]);

    }

    public function create($idneg,$idp)
    {

        return view('expediente.formatos.svitales.negs.create',["paciente" => Paciente::findOrFail($idp)])->with("idneg",$idneg);

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
        $svitales->tipo = '4';
        $svitales->estado = '1';
        $svitales->save();
        //actualizamos la llave foranea de NOta de Urgenccias
        $neg = NotaEgreso::findOrFail($request->get('idneg'));
        $neg->signos_vitales_idsignos_vitales = $svitales->idsignos_vitales;
        $neg->update();
        Alert::success('Agregados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/negs');
    }

    public function show($id)
    {
        return view("expediente.formatos.svitales.negs.show",["svitales" => SVitales::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('signos_vitales')->select('paciente_idpaciente')->where('idsignos_vitales','=',$id)->get();
            foreach ($s as $s ) {
            # code...
            $s=$s->paciente_idpaciente;
            }
        $paciente = DB::table('paciente')->select('apaterno','amaterno','nombre')->where('idpaciente','=',$s)->get();
        return view("expediente.formatos.svitales.negs.edit",["svitales" => SVitales::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);
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
        return Redirect::to('expediente/formatos/svitales/negs');
    }

    public function destroy($id)
    {
        $neg = DB::table('nota_egreso')->select('idne')->where('signos_vitales_idsignos_vitales','=',$id)->get();
            foreach ($neg as $neg ) {
            $neg = $neg->idne;
            }
        $n = NotaEgreso::findOrFail($neg);
        $n->signos_vitales_idsignos_vitales = NULL;
        $n->update();
        $svitales = SVitales::findOrFail($id);
        $svitales->delete();
        Alert::info('Eliminados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/negs');
    }
}
