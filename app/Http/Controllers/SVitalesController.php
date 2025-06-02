<?php
//Svitales Nota de Urgencias
namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\SVitales;
use eme\NUrgencias;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\SVitalesFormRequest;
use DB;
use Alert;

class SVitalesController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));
        $nurgencias = DB::table('nurgencias as nu')
        ->join('paciente as p', 'nu.paciente_idpaciente','=','p.idpaciente')
        ->select('p.idpaciente','p.apaterno','p.amaterno','p.nombre','nu.idnurgencias','nu.estado','nu.signos_vitales_idsignos_vitales','nu.created_at')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->where('p.nombre','LIKE','%'.$query.'%')
        ->orwhere('p.apaterno','LIKE','%'.$query.'%')
        ->where('p.estado','=','1')
        ->where('nu.estado','=','1')
        ->orderBy('nu.created_at','desc')
        ->paginate(7);
        return view("expediente.formatos.svitales.nu.index",["nurgencias" => $nurgencias,"searchText" => $query]);
    

    }

    public function create($idnu,$idp)
    {

        return view('expediente.formatos.svitales.nu.create',["paciente" => Paciente::findOrFail($idp)])->with("idnu",$idnu);
        

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
        $svitales->tipo = '1';
        $svitales->estado = '1';
        $svitales->save();
        //actualizamos la llave foranea de NOta de Urgenccias
        $nu = NUrgencias::findOrFail($request->get('idnu'));
        $nu->signos_vitales_idsignos_vitales = $svitales->idsignos_vitales;
        $nu->update();
        Alert::success('Agregados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/nu');
    }

    public function show($id)
    {
        return view("expediente.formatos.svitales.nu.show",["svitales" => SVitales::findOrFail($id)]);
    }

    public function edit($id)
    {
        
       $s = DB::table('signos_vitales')->select('paciente_idpaciente')->where('idsignos_vitales','=',$id)->get();
            foreach ($s as $s ) {
            $s=$s->paciente_idpaciente;
            }

        return view("expediente.formatos.svitales.nu.edit",["svitales" => SVitales::findOrFail($id),"paciente" => Paciente::findOrFail($s)]);

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
        Alert::warning('Edicion Correcta', 'Signos Vitales');    
        return Redirect::to('expediente/formatos/svitales/nu');
    }

    public function destroy($id)
    {
        $nu = DB::table('nurgencias')->select('idnurgencias')->where('signos_vitales_idsignos_vitales','=',$id)->get();
            foreach ($nu as $nu ) {
            $nu = $nu->idnurgencias;
            }
        $n = NUrgencias::findOrFail($nu);
        $n->signos_vitales_idsignos_vitales = NULL;
        $n->update();
        $svitales = SVitales::findOrFail($id);
        $svitales->delete();
        Alert::info('Eliminados Correctamente', 'Signos Vitales');
        return Redirect::to('expediente/formatos/svitales/nu');
    }
}
