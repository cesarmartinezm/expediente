<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\NotaIngresoEsp;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use eme\Http\Requests\NIEFormRequest;
use DB;
use Carbon\Carbon;
use Alert;
use PDF;
use App;
use View;

class NIEController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $nie=DB::table('nota_ing_esp as nie')
        ->join('paciente as p', 'nie.paciente_idpaciente','=','p.idpaciente')
        ->select('nie.hora_c','nie.triage','p.idpaciente','p.apaterno','p.amaterno','p.nombre','nie.idnie','nie.estado','nie.created_at')
        ->where('p.estado','=','1')
        ->where('nie.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('nie.estado','=','1')
        ->orderBy('nie.hora_c','desc')
        ->paginate(7);

        return view("expediente.formatos.nie.index",["nie"=>$nie,"searchText"=>$query]);
    }

    public function create($id)
    {
        //$query=trim($request->get('searchid'));
        $now= Carbon::now()->format('h:i');
        $paciente = DB::table('paciente')->where('idpaciente','=',$id)->get();
        return view("expediente.formatos.nie.create",["paciente"=>$paciente])->with("horac",$now);
    }
    public function store(NIEFormRequest $request)
    {
        try {
            
            DB::beginTransaction();
            $now = Carbon::now()->format('Y-m-d');
            $nowh = Carbon::now()->format('H:m');
            $nie = new NotaIngresoEsp;
            $nie->hora_c = $nowh;
            $nie->triage = $request->get('triage');
            $nie->folio = $request->get('folio');
            $nie->descripcion = Str::upper($request->get('descripcion'));
            $nie->dingreso = Str::upper($request->get('dingreso'));
            $nie->ind_medicas = $request->get('ind_medicas');
            $nie->medico_idmedico = '1';
            $nie->estado='1';
            //$nie->medico_idmedico=$request->get('medico');
            $nie->paciente_idpaciente=$request->get('paciente');
            $nie->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        Alert::success('Agregada Correctamente', 'Nota de Ingreso');
        return Redirect::to('expediente/formatos/nie');
    }

    public function show($id)
    {
        $idp = DB::table('nota_ing_esp')->select('paciente_idpaciente', 
            'signos_vitales_idsignos_vitales')->where('idnie','=',$id)->get();
        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids = $idp->signos_vitales_idsignos_vitales;
        }
        
        $svitales = DB::table('signos_vitales')->where('idsignos_vitales','=',$ids)->get();
        $view = View::make('expediente.formatos.nie.pdf_nie',["nie"=>NotaIngresoEsp::findOrFail($id),"p"=>Paciente::findOrFail($idp1),"svitales"=>$svitales])->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter','portrait');
        return $pdf->stream('pdf_nie','404');
    }

    public function edit($id)
    {
        $idp = DB::table('nota_ing_esp')->select('paciente_idpaciente',
        'signos_vitales_idsignos_vitales')->where('idnie','=',$id)->get();

        foreach ($idp as $idp ) {
            # code...
            $idp1=$idp->paciente_idpaciente;
            $ids = $idp->signos_vitales_idsignos_vitales;
        }
        
        $svitales = DB::table('signos_vitales')->where('idsignos_vitales','=',$ids)->get();
        $paciente = DB::table('paciente')->where('idpaciente','=',$idp1)->get();
        return view("expediente.formatos.nie.edit",["nie"=>NotaIngresoEsp::findOrFail($id),"paciente"=>$paciente, "svitales" => $svitales]);
    }

    public function update(NIEFormRequest $request,$id)
    {
            $nie = NotaIngresoEsp::findOrFail($id);
            $nie->triage = $request->get('triage');
            $nie->descripcion = Str::upper($request->get('descripcion'));
            $nie->dingreso = Str::upper($request->get('dingreso'));
            $nie->update();
            Alert::warning('Editada Correctamente', 'Nota de Ingreso');
        return Redirect::to('expediente/formatos/nie');
    }

    public function destroy($id)
    {
        $nie=NotaIngresoEsp::findOrFail($id);
        $nie->estado='0';
        $nie->update();
        Alert::info('Eliminada Correctamente', 'Nota de Ingreso');
        return Redirect::to('expediente/formatos/nie');
    }
}
