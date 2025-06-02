<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\NotaEgreso;
use eme\Paciente;
use eme\SVitales;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use eme\Http\Requests\NotaEFormRequest;
use DB;
use Carbon\Carbon;
use Alert;
use PDF;
use App;
use View;

class NotaEgresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $neg=DB::table('nota_egreso as neg')
        ->join('paciente as p', 'neg.paciente_idpaciente','=','p.idpaciente')
        ->select('nEg.hora_c','nEg.triage','p.idpaciente','p.apaterno','p.amaterno','p.nombre','neg.idne','neg.estado','neg.created_at','p.estado')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('neg.estado','=','1')
        ->orderBy('neg.hora_c','desc')
        ->paginate(7);

        return view("expediente.formatos.neg.index",["neg"=>$neg,"searchText"=>$query]);
    }

    public function create($id)
    {
        //$query = trim($request->get('searchid'));
        $paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        return view("expediente.formatos.neg.create", ["paciente"=>$paciente]);
        
    }
    public function store(NotaEFormRequest $request)
    {
        $now=Carbon::now()->format('Y-m-d');
        $nowh=Carbon::now()->format('H:m');
        $neg = new NotaEgreso;
        $neg->hora_c = $nowh;
        $neg->triage = $request->get('triage');
        $neg->folio = $request->get('folio');
        $neg->descripcion = Str::upper($request->get('descripcion'));
        $neg->degreso = Str::upper($request->get('degreso'));
        $neg->ind_medicas = $request->get('ind_medicas');
        $neg->medico_idmedico = '1';
        $neg->paciente_idpaciente = $request->get('paciente');
        $neg->estado='1';
        $neg->save();
        Alert::success('Agregada Correctamente', 'Nota de Egreso');
        return Redirect::to('expediente/formatos/neg');
    }

    public function show($id)
    {
        $idp = DB::table('nota_egreso')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idne','=',$id)->get();

        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }
        
        $view = View::make('expediente.formatos.neg.pdf_neg',["neg"=>NotaEgreso::findOrFail($id),"p"=>Paciente::findOrFail($idp1),"svitales" => SVitales::findOrFail($ids)])->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter','portrait');
        return $pdf->stream('pdf_neg','404');
    }

    public function edit($id)
    {
        $idp = DB::table('nota_egreso')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idne','=',$id)->get();
        
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }
        //$paciente = DB::table('paciente')->where('idpaciente','=',$idp1)->get();
        return view("expediente.formatos.neg.edit",["neg"=>NotaEgreso::findOrFail($id),"paciente"=>Paciente::findOrFail($idp1),"svitales" => SVitales::findOrFail($ids)]);
    }

    public function update(NotaEFormRequest $request,$id)
    {
        $neg=NotaEgreso::findOrFail($id);
        $neg->triage = $request->get('triage');
        $neg->descripcion = Str::upper($request->get('descripcion'));
        $neg->degreso = Str::upper($request->get('degreso'));
        $neg->update();
        Alert::warning('Editada Correctamente', 'Nota de Egreso');
        return Redirect::to('expediente/formatos/neg');
    }

    public function destroy($id)
    {
        $neg=NotaEgreso::findOrFail($id);
        $neg->estado='0';
        $neg->update();
        Alert::info('Eliminada Correctamente', 'Nota de Egreso');
        return Redirect::to('expediente/formatos/neg');
    }
}
