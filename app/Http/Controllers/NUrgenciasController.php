<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\NUrgencias;
use eme\Paciente;
use eme\SVitales;
use eme\AntRelacionados;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use eme\Http\Requests\NUrgenciasFormRequest;
use DB;
use Carbon\Carbon;
use Alert;
use PDF;
use App;
use View;

class NUrgenciasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $nurgencias=DB::table('nurgencias as nu')
        ->join('paciente as p', 'nu.paciente_idpaciente','=','p.idpaciente')
        ->select('nu.hconsulta','nu.triage','p.idpaciente','p.apaterno','p.amaterno','p.nombre','nu.idnurgencias','nu.estado')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->orderBy('nu.hconsulta','desc')
        ->paginate(7);

        return view("expediente.formatos.nurgencias.index",["nurgencias"=>$nurgencias,"searchText"=>$query]);
    }

    public function create($id)
    {

        //$query = trim($request->get('searchid'));
        
        
        $paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        //$medico = DB::table('medico')->get();

        return view("expediente.formatos.nurgencias.create", ["paciente"=>$paciente]);
    }

    public function store(NUrgenciasFormRequest $request)
    {
        try {
            
        DB::beginTransaction();
        //$now = Carbon::now()->format('Y-m-d');
        //$h = date('H:i');
        $nowh = Carbon::now()->format('H:i');
        $currentdate = $nowh;
        $nurgencias = new NUrgencias;
        $nurgencias->hconsulta = $nowh;
        $nurgencias->triage = $request->get('triage');
        $nurgencias->folio = $request->get('folio');
        $nurgencias->padecimiento_a = Str::upper($request->get('padecimiento_a'));
        $nurgencias->glasgow = $request->get('glasgow');
        $nurgencias->exp_fisica = Str::upper($request->get('exp_fisica'));
        $nurgencias->dpresunciales = Str::upper($request->get('dpresunciales'));
        $nurgencias->indicaciones_med = $request->get('indicaciones_med');
        $nurgencias->hr_llam_esp = $currentdate;
        $nurgencias->hr_lleg_esp = $request->get('hr_lleg_esp');
        $nurgencias->medico_idmedico = '1';
        $nurgencias->estado = '1';
        //$nurgencias->medico_idmedico=$request->get('idmedico');
        $nurgencias->paciente_idpaciente=$request->get('paciente');
        $nurgencias->save();
        
        $id = DB::table('nurgencias')->select('idnurgencias')->where('paciente_idpaciente','=',$nurgencias->paciente_idpaciente)->get();
        
        foreach ($id as $id ) {
            $id2=$id->idnurgencias;
        }
        
        //tabla antecedentes relacionados
        $ant= new AntRelacionados;
        $ant->hipertencion = $request->get('hipertencion');
        $ant->diabetes = $request->get('diabetes');
        $ant->cardiovasculares = $request->get('cardiovasculares');
        $ant->obesidad = $request->get('obesidad');
        $ant->gastritis = $request->get('gastritis');
        $ant->hepatitis = $request->get('hepatitis');
        $ant->nefropatias = $request->get('nefropatias');
        $ant->artritis = $request->get('artritis');
        $ant->convulsiones = $request->get('convulsiones');
        $ant->cirugias = $request->get('cirugias');
        $ant->traumaticos = $request->get('traumaticos');
        $ant->fimicos = $request->get('fimicos');
        $ant->neoplasias = $request->get('neoplasias');
        $ant->hemofilia = $request->get('hemofilia');
        $ant->psiquiatricos = $request->get('psiquiatricos');
        $ant->enfsexuales = $request->get('enfsexuales');
        $ant->otros = Str::upper($request->get('otros'));
        $ant->fur = Str::upper($request->get('fur'));
        $ant->alergias = Str::upper($request->get('alergias'));
        $ant->toxicomanias = Str::upper($request->get('toxicomanias'));
        $ant->nurgencias_idnurgencias = $id2;
        $ant->save();

        DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            Alert::error('Algo salio mal', 'OPSS');
        }
        Alert::success('Agregada Correctamente', 'Nota de Urgencias');
        return Redirect::to('expediente/formatos/nurgencias');
    }

    public function show($id)
    {
        $idp = DB::table('nurgencias')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idnurgencias','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1 = $idp->paciente_idpaciente;
            $ids = $idp->signos_vitales_idsignos_vitales;
        }
        
        $antecedentes = DB::table('antrel')->where('nurgencias_idnurgencias','=',$id)->get();
        foreach ($antecedentes as $ant ) {
            # code...
            $idant = $ant->idantrel;
            
        }
        $svitales = DB::table('signos_vitales')->where('idsignos_vitales','=',$ids)->get();
        
        $view = View::make('expediente.formatos.nurgencias.pdf_nurgencias',["nurgencias"=>NUrgencias::findOrFail($id),"p"=>Paciente::findOrFail($idp1),"ant"=>AntRelacionados::findOrFail($idant),"svitales"=>$svitales])->render();
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter','portrait');
        return $pdf->stream('pdf_nurgencias','404');
       
    }

    public function edit($id)
    {
        
            $idp = DB::table('nurgencias')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idnurgencias','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1 = $idp->paciente_idpaciente;
            $ids = $idp->signos_vitales_idsignos_vitales;
        }
        
        $paciente = DB::table('paciente')->where('idpaciente','=',$idp1)->get();
        $antecedentes = DB::table('antrel')->where('nurgencias_idnurgencias','=',$id)->get();
        $svitales = DB::table('signos_vitales')->where('idsignos_vitales','=',$ids)->get();
       
        return view("expediente.formatos.nurgencias.edit",["nurgencias"=>NUrgencias::findOrFail($id),"paciente"=>$paciente,"antecedentes"=>$antecedentes,"svitales"=>$svitales]);
    }

    public function update(NUrgenciasFormRequest $request,$id)
    {
        
        $nurgencias = NUrgencias::findOrFail($id);
        $nurgencias->triage = $request->get('triage');
        $nurgencias->padecimiento_a = Str::upper($request->get('padecimiento_a'));
        $nurgencias->glasgow = $request->get('glasgow');
        $nurgencias->exp_fisica = Str::upper($request->get('exp_fisica'));
        $nurgencias->dpresunciales = Str::upper($request->get('dpresunciales'));
        $nurgencias->update();

        $id2 = $request->get('idantecedentes');

        $ant = AntRelacionados::findOrFail($id2);
        $ant->hipertencion = $request->get('hipertencion');
        $ant->diabetes = $request->get('diabetes');
        $ant->cardiovasculares = $request->get('cardiovasculares');
        $ant->obesidad = $request->get('obesidad');
        $ant->gastritis = $request->get('gastritis');
        $ant->hepatitis = $request->get('hepatitis');
        $ant->nefropatias = $request->get('nefropatias');
        $ant->artritis = $request->get('artritis');
        $ant->convulsiones = $request->get('convulsiones');
        $ant->cirugias = $request->get('cirugias');
        $ant->traumaticos = $request->get('traumaticos');
        $ant->fimicos = $request->get('fimicos');
        $ant->neoplasias = $request->get('neoplasias');
        $ant->hemofilia = $request->get('hemofilia');
        $ant->psiquiatricos = $request->get('psiquiatricos');
        $ant->enfsexuales = $request->get('enfsexuales');
        $ant->otros = Str::upper($request->get('otros'));
        $ant->fur = Str::upper($request->get('fur'));
        $ant->alergias = Str::upper($request->get('alergias'));
        $ant->toxicomanias = Str::upper($request->get('toxicomanias'));
        $ant->update();
        Alert::warning('Editada Correctamente', 'Nota de Urgencias');
        return Redirect::to('expediente/formatos/nurgencias');
    }

    public function destroy($id)
    {
        $nurgencias=NUrgencias::findOrFail($id);
        $nurgencias->estado='0';
        
        $ant = DB::table('antrel')->where('nurgencias_idnurgencias','=',$id)->get();
        foreach ($ant as $ant ) {
            $ant = $ant->idantrel;
        }

        $antecedentes = AntRelacionados::findOrFail($ant);
        $antecedentes->delete();
        $nurgencias->delete();
        Alert::info('Eliminada Correctamente', 'Nota de Urgencias');
        return Redirect::to('expediente/formatos/nurgencias');
    }

    //public function generarpdf()
    //{
        //return view('expediente.formatos.nurgencias.pdf_nurgencias');
      //  return Redirect::to('expediente/formatos/nurgencias/pdf_nurgencias');
   // }
}
