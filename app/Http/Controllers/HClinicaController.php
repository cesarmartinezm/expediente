<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use eme\Http\Requests\HClinicaFormRequest;
use eme\HClinica;
use eme\Paciente;
use eme\SVitales;
use eme\AheredoFamiliares;
use eme\AObstetricos;
use eme\ApNopatologicos;
use eme\ApPatologicos;
use DB;
use carbon\Carbon;
use Alert;
use PDF;
use App;
use View;
//include "cabecera.php";

class HClinicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $hc=DB::table('hclinica as hc')
        ->join('paciente as p', 'hc.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','hc.estado','hc.created_at','p.estado','hc.idhclinica')
        ->where('p.estado','=','1')
        ->where('hc.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('hc.estado','=','1')
        ->orderBy('hc.created_at','desc')
        ->paginate(7);

        return view("expediente.formatos.hclinica.index",["hc"=>$hc,"searchText"=>$query]);
    }

    

    public function create($id)
    {   
        
        //$paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        return view('expediente.formatos.hclinica.create', ["paciente"=>Paciente::findOrFail($id)]);
    }
    public function store(HClinicaFormRequest $request)
    {

        try {
            DB::beginTransaction();
            $now = Carbon::now()->format('Y-m-d');
            $nowh = Carbon::now()->format('H:m');
            $hclinica = new HClinica;
            $hclinica->habitacion = $request->get('habitacion');
            $hclinica->interrogatorio = $request->get('interrogatorio');
            $hclinica->padecimiento_actual = Str::upper($request->get('padecimiento_actual'));
            $hclinica->habitus_exterior = Str::upper($request->get('habitus_exterior'));
            $hclinica->glasgow = $request->get('glasgow');
            $hclinica->bartell = $request->get('bartell');
            $hclinica->cabeza = Str::upper($request->get('cabeza'));
            $hclinica->ojos = Str::upper($request->get('ojos'));
            $hclinica->cuello = Str::upper($request->get('cuello'));
            $hclinica->torax = Str::upper($request->get('torax'));
            $hclinica->abdomen = Str::upper($request->get('abdomen'));
            $hclinica->genitales = Str::upper($request->get('genitales'));
            $hclinica->extremidades_t = Str::upper($request->get('extremidades_t'));
            $hclinica->extremidades_p = Str::upper($request->get('extremidades_p'));
            $hclinica->otros = Str::upper($request->get('otros'));
            $hclinica->diagnostico = Str::upper($request->get('diagnostico'));
            $hclinica->plan = Str::upper($request->get('plan'));
            $hclinica->paciente_idpaciente = Str::upper($request->get('paciente'));
            $hclinica->medico_idmedico = $request->get('medico');
            $hclinica->medico_idmedico = '1';
            $hclinica->estado = '1';
            $hclinica->paciente_idpaciente1 =$request->get('paciente');
            $hclinica->save();

            //Consultamosel ID dela hostia clinica que se guardo, para relacionar la tabla con los antecedentes
            $id = DB::table('hclinica')->select('idhclinica')->where('paciente_idpaciente','=',$hclinica->paciente_idpaciente)->get();
            foreach ($id as $id ) {
            # code...
            $id2=$id->idhclinica;
            }
            //tabla Antecedentes Heredo Familiares
            $ahf = new AheredoFamiliares;
            $ahf->diabetes = $request->get('diabetes');
            $ahf->exfumador = $request->get('exfumador');
            $ahf->hipertension = $request->get('hipertension');
            $ahf->exalcoholico = $request->get('exalcoholico');
            $ahf->cancer = $request->get('cancer');
            $ahf->exadicto = $request->get('exadicto');
            $ahf->oenfermedades = Str::upper($request->get('oenfermedades'));
            $ahf->hclinica_idhclinica = $id2;
            $ahf->hclinica_paciente_idpaciente = $request->get('paciente');
            $ahf->save();

            //tabla ANTECEDENTES PERSONALES NO PATOLOGICOS
            $apnp = new ApNopatologicos;
            $apnp->tabaquismo = $request->get('tabaquismo');
            $apnp->alcoholismo = $request->get('alcoholismo');
            $apnp->surbanizacion = $request->get('surbanizacion');
            $apnp->habhigienicos = $request->get('habhigienicos');
            $apnp->habdieteticos = $request->get('habdieteticos');
            $apnp->hclinica_idhclinica = $id2;
            $apnp->hclinica_paciente_idpaciente = $request->get('paciente');
            $apnp->save();

            //tabla ANTECEDENTES PERSONALES PATOLOGICOS

            $app = new ApPatologicos;
            $app->diabetes = $request->get('diabetes');
            $app->hparterial = $request->get('hparterial');
            $app->cancer = $request->get('cancer');
            $app->oenfermedades = Str::upper($request->get('oenfermedades1'));
            $app->diagnosticosp = Str::upper($request->get('diagnosticosp'));
            $app->cirugprevias = Str::upper($request->get('cirugprevias'));
            $app->fracturas = Str::upper($request->get('fracturas'));
            $app->ts = Str::upper($request->get('ts'));
            $app->alergias = Str::upper($request->get('alergias'));
            $app->hclinica_idhclinica = $id2;
            $app->hclinica_paciente_idpaciente = $request->get('paciente');
            $app->save();

            //tabla Antecedentes Obstetricos

            $ao = new AObstetricos;
            $ao->menarca = Str::upper($request->get('menarca'));
            $ao->gesta = $request->get('gesta');
            $ao->para = $request->get('para');
            $ao->fup = Str::upper($request->get('fup'));
            $ao->abortos = $request->get('abortos');
            $ao->cesareas = $request->get('cesareas');
            $ao->fur = Str::upper($request->get('fur'));
            $ao->meplafam = Str::upper($request->get('meplafam'));
            $ao->hclinica_idhclinica = $id2;
            $ao->hclinica_paciente_idpaciente = $request->get('paciente');
            $ao->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollback();
        }
        Alert::success('Agregada Correctamente', 'Historia Clínica');
        return Redirect::to('expediente/formatos/hclinica');
    }

    public function show($id)
    {
        $idp = DB::table('hclinica')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idhclinica','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }
        $ant = DB::table('aheredo_familares')->where('hclinica_idhclinica','=',$id)->get();
        foreach ($ant as $ant ) {
            # code...
            $ant=$ant->idaheredo_familiares;
        }
        $apn = DB::table('ap_nopatologicos')->where('hclinica_idhclinica','=',$id)->get();
        foreach ($apn as $apn ) {
            # code...
            $apn=$apn->idap_nopatologicos;
        }
        $ap = DB::table('ap_patologicos')->where('hclinica_idhclinica','=',$id)->get();
        foreach ($ap as $ap ) {
            # code...
            $ap=$ap->idap_patologicos;
        }
        $ao = DB::table('aobtetricos')->where('hclinica_idhclinica','=',$id)->get();
        foreach ($ao as $ao ) {
            # code...
            $ao=$ao->idaobtetricos;
        }
        $view = View::make('expediente.formatos.hclinica.pdf_hclinica',["paciente"=>Paciente::findOrFail($idp1),"hclinica"=>HClinica::findOrFail($id),"aheredo"=>AheredoFamiliares::findOrFail($ant),"apn"=>ApNopatologicos::findOrFail($apn),"ap"=>ApPatologicos::findOrFail($ap),"ao"=>AObstetricos::findOrFail($ao), "svitales"=> SVitales::findOrFail($ids)])->render();
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('pdf_hclinica','404');
    }

    public function edit($id)
    {
        $idp = DB::table('hclinica')->select('paciente_idpaciente','signos_vitales_idsignos_vitales')->where('idhclinica','=',$id)->get();
        
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids=$idp->signos_vitales_idsignos_vitales;
        }

        
        $ant = DB::table('aheredo_familares')->where('hclinica_idhclinica','=',$id)->get();
        $paciente = DB::table('paciente')->where('idpaciente','=',$idp1)->get();
        $apn = DB::table('ap_nopatologicos')->where('hclinica_idhclinica','=',$id)->get();
        $ap = DB::table('ap_patologicos')->where('hclinica_idhclinica','=',$id)->get();
        $ao = DB::table('aobtetricos')->where('hclinica_idhclinica','=',$id)->get();
        return view("expediente.formatos.hclinica.edit",["hclinica"=>HClinica::findOrFail($id),"paciente"=>$paciente,"ant"=>$ant,"apn"=>$apn,"ap"=>$ap,"ao"=>$ao,"svitales"=>SVitales::findOrFail($ids)]);
    }

    public function update(HClinicaFormRequest $request,$id)
    {
        $hclinica = HClinica::findOrFail($id);
        $hclinica->habitacion = $request->get('habitacion');
        $hclinica->interrogatorio = $request->get('interrogatorio');
        $hclinica->padecimiento_actual = Str::upper($request->get('padecimiento_actual'));
        $hclinica->habitus_exterior = Str::upper($request->get('habitus_exterior'));
        $hclinica->glasgow = $request->get('glasgow');
        $hclinica->bartell = $request->get('bartell');
        $hclinica->cabeza = Str::upper($request->get('cabeza'));
        $hclinica->ojos = Str::upper($request->get('ojos'));
        $hclinica->cuello = Str::upper($request->get('cuello'));
        $hclinica->torax = Str::upper($request->get('torax'));
        $hclinica->abdomen = Str::upper($request->get('abdomen'));
        $hclinica->genitales = Str::upper($request->get('genitales'));
        $hclinica->extremidades_t = Str::upper($request->get('extremidades_t'));
        $hclinica->extremidades_p = Str::upper($request->get('extremidades_p'));
        $hclinica->otros = Str::upper($request->get('otros'));
        $hclinica->diagnostico = Str::upper($request->get('diagnostico'));
        $hclinica->plan = Str::upper($request->get('plan'));
        $hclinica->update();

            
        //tabla Antecedentes Heredo Familiares
            
            $ahf = AheredoFamiliares::findOrFail($request->get('id11'));
            $ahf->diabetes = $request->get('diabetes');
            $ahf->exfumador = $request->get('exfumador');
            $ahf->hipertension = $request->get('hipertension');
            $ahf->exalcoholico = $request->get('exalcoholico');
            $ahf->cancer = $request->get('cancer');
            $ahf->exadicto = $request->get('exadicto');
            $ahf->oenfermedades = Str::upper($request->get('oenfermedades'));
            $ahf->update();

            //tabla ANTECEDENTES PERSONALES NO PATOLOGICOS
            $apnp = ApNopatologicos::findOrFail($request->get('id12'));
            $apnp->tabaquismo = $request->get('tabaquismo');
            $apnp->alcoholismo = $request->get('alcoholismo');
            $apnp->surbanizacion = $request->get('surbanizacion');
            $apnp->habhigienicos = $request->get('habhigienicos');
            $apnp->habdieteticos = $request->get('habdieteticos');
            $apnp->update();

            //tabla ANTECEDENTES PERSONALES PATOLOGICOS

            $app = ApPatologicos::findOrFail($request->get('id13'));
            $app->diabetes = $request->get('diabetes');
            $app->hparterial = $request->get('hparterial');
            $app->cancer = $request->get('cancer');
            $app->oenfermedades = Str::upper($request->get('oenfermedades1'));
            $app->diagnosticosp = Str::upper($request->get('diagnosticosp'));
            $app->cirugprevias = Str::upper($request->get('cirugprevias'));
            $app->fracturas = Str::upper($request->get('fracturas'));
            $app->ts = Str::upper($request->get('ts'));
            $app->alergias = Str::upper($request->get('alergias'));
            $app->update();

            //tabla Antecedentes Obstetricos

            $ao = AObstetricos::findOrFail($request->get('id14'));
            $ao->menarca = Str::upper($request->get('menarca'));
            $ao->gesta = $request->get('gesta');
            $ao->para = $request->get('para');
            $ao->fup = Str::upper($request->get('fup'));
            $ao->abortos = $request->get('abortos');
            $ao->cesareas = $request->get('cesareas');
            $ao->fur = Str::upper($request->get('fur'));
            $ao->meplafam = Str::upper($request->get('meplafam'));
            $ao->update();
            Alert::warning('Edicíon Correcta', 'Historia Clínica');
        return Redirect::to('expediente/formatos/hclinica');
    }

    public function destroy($id)
    {
        $hclinica=HClinica::findOrFail($id);
        $hclinica->estado='0';
        $hclinica->update();
        Alert::info('Eliminada Correctamente', 'Historia Clínica');
        return Redirect::to('expediente/formatos/hclinica');
    }
    
 }
