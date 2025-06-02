<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\NEvolucion;
use eme\Paciente;
use eme\SVitales;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\NEvolucionFormRequest;
use DB;
use Carbon\Carbon;
use Alert;
use PDF;
use App;
use View;

class NEvolucionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $ne=DB::table('nota_evol as ne')
        ->join('paciente as p', 'ne.paciente_idpaciente','=','p.idpaciente')
        ->select('ne.hora_c','ne.triage','p.idpaciente','p.apaterno','p.amaterno','p.nombre','ne.idnie','ne.estado','ne.created_at','p.estado')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('ne.estado','=','1')
        ->orderBy('ne.hora_c','desc')
        ->paginate(7);

        return view("expediente.formatos.ne.index",["ne"=>$ne,"searchText"=>$query]);
    }

    public function create($id)
    {
        //$query = trim($request->get('searchid'));
        $paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        return view("expediente.formatos.ne.create", ["paciente"=>$paciente]);
    }
    public function store(NEvolucionFormRequest $request)
    {
         $now=Carbon::now()->format('Y-m-d');
        $nowh=Carbon::now()->format('H:m');
        $ne = new NEvolucion;
        $ne->hora_c = $nowh;
        $ne->triage = $request->get('triage');
        $ne->folio = $request->get('folio');
        $ne->descripcion = Str::upper($request->get('descripcion'));
        $ne->dactual = Str::upper($request->get('dactual'));
        $ne->medico_idmedico = '1';
        $ne->estado = '1';
        //$ne->medico_idmedico = $request->get('');
        $ne->paciente_idpaciente = $request->get('paciente');
        $ne->save();
        Alert::success('Agregada Correctamente', 'Nota de Evolución');
        return Redirect::to('expediente/formatos/ne');
    }

    public function show($id)
    {
        $idp = DB::table('nota_evol')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idnie','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }
        $view = View::make('expediente.formatos.ne.pdf_ne',["ne"=>NEvolucion::findOrFail($id),"p"=>Paciente::findOrFail($idp1),"svitales" => SVitales::findOrFail($ids)])->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter','portrait');
        return $pdf->stream('pdf_ne','404');
    }

    public function edit($id)
    {
        $idp = DB::table('nota_evol')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idnie','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }
        $paciente = DB::table('paciente')->where('idpaciente','=',$idp1)->get();
        return view("expediente.formatos.ne.edit",["ne"=>NEvolucion::findOrFail($id),"paciente"=>$paciente, "svitales"=>SVitales::findOrFail($ids)]);
    }

    public function update(NEvolucionFormRequest $request,$id)
    {
        $ne=NEvolucion::findOrFail($id);
        $ne->triage = $request->get('triage');
        $ne->descripcion = Str::upper($request->get('descripcion'));
        $ne->dactual = Str::upper($request->get('dactual'));
        $ne->update();
        Alert::warning('Editada Correctamente', 'Nota de Evolución');
        return Redirect::to('expediente/formatos/ne');
    }

    public function destroy($id)
    {
        $ne=NEvolucion::findOrFail($id);
        $ne->estado='0';
        $ne->update();
        Alert::info('Eliminada Correctamente', 'Nota de Evolución');
        return Redirect::to('expediente/formatos/ne');
    }
}
