<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;

use eme\Http\Requests;
use eme\SolicitudInterconsulta;
use eme\Paciente;
use eme\Medico;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\SolicitudIFormRequest;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Alert;
use PDF;
use App;
use View;


class SolicitudIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $sic=DB::table('sic as sic')
        ->join('paciente as p', 'sic.paciente_idpaciente','=','p.idpaciente')
        ->select('sic.fsolicitud','sic.hora','p.idpaciente','p.apaterno','p.amaterno','p.nombre','sic.idsic','sic.estado')
        ->where('p.estado','=','1')
        ->where('sic.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('sic.estado','=','1')
        ->orderBy('sic.hora','desc')
        ->paginate(7);
        
        return view("expediente.formatos.sic.index",["sic"=>$sic,"searchText"=>$query]);
    }

    public function create($id)
    {
        //$query = trim($request->get('searchid'));
        $paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        $medico = DB::table('medico')->get();
      $now= Carbon::now()->format('h:i');
      //Alert::success('Agregada Correctamente', 'Solicitud Inter. Cons');
        return view("expediente.formatos.sic.create",["paciente"=>$paciente,"medico"=>$medico])->with("horac",$now);
    }
    public function store(SolicitudIFormRequest $request)
    {
        
        $now = Carbon::now()->format('Y-m-d');
        $nowh = Carbon::now()->format('H:m');
        $solicitud = new SolicitudInterconsulta;
        $solicitud->fsolicitud = $now;
        $solicitud->hora = $nowh;
        $solicitud->habitacion = $request->get('habitacion');
        $solicitud->servicio = $request->get('servicio');
        $solicitud->motivo = Str::upper($request->get('motivo'));
        $solicitud->servicior = $request->get('servicior');
        $solicitud->medicor = $request->get('medicor');
        $solicitud->fechar = $request->get('fechar');
        $solicitud->horar = $request->get('horar');
        //$solicitud->medico_idmedico=$request->get('medicor');
        $solicitud->medico_idmedico = '1';
        $solicitud->estado = '1';
        //$solicitud->paciente_idpaciente='1';
        $solicitud->paciente_idpaciente = $request->get('paciente');
        $solicitud->save();
        Alert::success('Agregada Correctamente', 'Solicitud Inter. Cons');
        return Redirect::to('expediente/formatos/sic');
    }

    public function show($id)
    {
        $idp = DB::table('sic')->select('paciente_idpaciente','medicor','medico_idmedico')->where('idsic','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp2 = $idp->paciente_idpaciente;
            $med_s=$idp->medico_idmedico;
            $med_r=$idp->medicor;
        }

        $view = View::make('expediente.formatos.sic.pdf_sic',["sic"=>SolicitudInterconsulta::findOrFail($id),"p"=>Paciente::findOrFail($idp2),"medicos"=>Medico::findOrFail($med_s),"medicor"=>Medico::findOrFail($med_r)])->render();
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4','landscape');
        return $pdf->stream('pdf_sic','404');
    }

    public function edit($id)
    {
        $idp = DB::table('sic')->select('medico_idmedico','paciente_idpaciente')->where('idsic','=',$id)->get();
        foreach ($idp as $id2 ) {
            # code...
            $idp = $id2->paciente_idpaciente;
            $idm = $id2->medico_idmedico;
        }
        $paciente = DB::table('paciente')->where('idpaciente','=',$idp)->get();
        //$medicoo=DB::table('medico')->select('apaterno','amaterno','nombre')->where('idmedico','=',$idm);
        $medico = DB::table('medico')->get();
        return view("expediente.formatos.sic.edit",["sic"=>SolicitudInterconsulta::findOrFail($id),"paciente"=>$paciente,"medico"=>$medico]);
    }

    public function update(SolicitudIFormRequest $request,$id)
    {
        $solicitud = SolicitudInterconsulta::findOrFail($id);
        $solicitud->habitacion = $request->get('habitacion');
        $solicitud->servicio = $request->get('servicio');
        $solicitud->motivo = Str::upper($request->get('motivo'));
        $solicitud->servicior = $request->get('servicior');
        $solicitud->medicor = $request->get('medicor');
        $solicitud->fechar = $request->get('fechar');
        $solicitud->horar = $request->get('horar');
        $solicitud->update();
        Alert::warning('Edición Correcta', 'Solicitud Inter. Cons');
        return Redirect::to('expediente/formatos/sic');
    }

    public function destroy($id)
    {
        $solicitud=SolicitudInterconsulta::findOrFail($id);
        $solicitud->estado='0';
        $solicitud->update();
        Alert::info('Eliminada Correctamente', 'Solicitud Inter. Cons');
        return Redirect::to('expediente/formatos/sic');
    }
}
