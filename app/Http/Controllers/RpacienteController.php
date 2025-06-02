<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;

use eme\Http\Requests;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use eme\Http\Requests\PacienteFormRequest;
use DB;
use Alert;
use Carbon\Carbon;
class RpacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $paciente=DB::table('paciente')->where('estado','=','1')
        ->where('nombre','LIKE','%'.$query.'%')
        
        ->orwhere('apaterno','LIKE','%'.$query.'%')
        ->where('estado','=','1')
        ->paginate(7);

        return view("datos.generales.index",["paciente"=>$paciente,"searchText"=>$query]);
         
    }

    public function create()
    {
        $estado = DB::table('estados')->get();
        $convenio = DB::table('convenio')->get();
        return view("datos.generales.create")->with(["estado"=>$estado,"estado1"=>$estado,"convenio"=>$convenio]);
    }
    public function store(PacienteFormRequest $request)
    {
        $now = Carbon::now()->format('H:i');
        $currentdate = $now;
        $paciente = new Paciente;
        $paciente->apaterno = Str::upper($request->get('apaterno'));
        $paciente->amaterno = Str::upper($request->get('amaterno'));
        $paciente->nombre = Str::upper($request->get('nombre'));
        $paciente->fnacimiento = $request->get('fnacimiento');
        $paciente->nacionalidad = $request->get('nacionalidad');
        $paciente->edo_nacimiento = $request->get('edo_nacimiento');
        $paciente->genero = $request->get('genero');
        $paciente->edo_civil = $request->get('edo_civil');
        $paciente->dom_estado = $request->get('dom_estado');
        $paciente->dom_municipio = Str::upper($request->get('dom_municipio'));
        $paciente->dom_localidad = Str::upper($request->get('dom_localidad'));
        $paciente->dom_calle = Str::upper($request->get('dom_calle'));
        $paciente->dom_numero = $request->get('dom_numero');
        $paciente->convenio = $request->get('convenio');
        $paciente->ocupacion = Str::upper($request->get('ocupacion'));
        $paciente->estado = '1';//1 activo  0 Inactivo
        $paciente->save();
        Alert::success('Agregado Correctamente', 'PACIENTE');
        return Redirect::to('datos/generales');
    }

    public function show($id)
    {
        
        return view("datos.generales.show",["paciente"=>Paciente::findOrFail($id)]);
        
    }

    public function edit($id)
    {
        $estado = DB::table('estados')->get();
        $convenio = DB::table('convenio')->get();
        return view("datos.generales.edit",["paciente"=>Paciente::findOrFail($id),"estado"=>$estado,"estado1"=>$estado,"convenio"=>$convenio]);
    }

    public function update(PacienteFormRequest $request,$id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->apaterno = Str::upper($request->get('apaterno'));
        $paciente->amaterno = Str::upper($request->get('amaterno'));
        $paciente->nombre = Str::upper($request->get('nombre'));
        $paciente->fnacimiento = $request->get('fnacimiento');
        $paciente->nacionalidad = $request->get('nacionalidad');
        $paciente->edo_nacimiento = $request->get('edo_nacimiento');
        $paciente->genero = $request->get('genero');
        $paciente->edo_civil = $request->get('edo_civil');
        $paciente->dom_estado = $request->get('dom_estado');
        $paciente->dom_municipio = Str::upper($request->get('dom_municipio'));
        $paciente->dom_localidad = Str::upper($request->get('dom_localidad'));
        $paciente->dom_calle = Str::upper($request->get('dom_calle'));
        $paciente->dom_numero = $request->get('dom_numero');
        $paciente->convenio = $request->get('convenio');
        $paciente->ocupacion = Str::upper($request->get('ocupacion'));
        $paciente->update();
        Alert::warning('Edición Correcta', 'PACIENTE');
        return Redirect::to('datos/generales');
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->estado = '0';
        $paciente->update();
        Alert::success('Eliminado Correctamente', 'PACIENTE');
        return Redirect::to('datos/generales');
    }

}