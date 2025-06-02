<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\Medico;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\MedicoFormRequest;
use DB;
use Alert;
//use import swal from 'sweetalert';
use Illuminate\Support\Str;
class MedicoController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $medico=DB::table('medico')->where('estado','=','1')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orwhere('apaterno','LIKE','%'.$query.'%')
        ->where('estado','=','1')
        ->paginate(7);
       
        //Alert::success('Agregado Correctamente', 'MEDICO');
           //alert()->success('Success Message', 'Optional Title');
        return view("datos.medico.index",["medico"=>$medico,"searchText"=>$query]);
    }

    public function create()
    {
        $especialidad = DB::table('especialidades')->get();
        return view("datos.medico.create")->with('especialidad',$especialidad);
    }
    public function store(MedicoFormRequest $request)
    {
        $medico = new Medico;
        $medico->apaterno = Str::upper($request->get('apaterno'));
        $medico->amaterno = Str::upper($request->get('amaterno'));
        $medico->nombre = Str::upper($request->get('nombre'));
        $medico->especialidad = $request->get('especialidad');
        $medico->num_cedula=$request->get('num_cedula');
        $medico->estado='1';
        $medico->save();
        Alert::success('Agregado Correctamente', 'MEDICO');
        //return Redirect::to('datos/medico')->with('success','Agregado correctamente');
        return Redirect::to('datos/medico');
    }

    public function show($id)
    {
        
        return view("datos.medico.show",["medico"=>Medico::findOrFail($id)]);
    }
 
    public function edit($id)
    {
        $especialidad = DB::table('especialidades')->get();
        return view("datos.medico.edit",["medico"=>Medico::findOrFail($id),"especialidad"=>$especialidad]);
    }

    public function update(MedicoFormRequest $request,$id)
    {
        $medico=Medico::findOrFail($id);
        $medico->apaterno = Str::upper($request->get('apaterno'));
        $medico->amaterno = Str::upper($request->get('amaterno'));
        $medico->nombre = Str::upper($request->get('nombre'));
        $medico->especialidad = Str::upper($request->get('especialidad'));
        $medico->num_cedula=$request->get('num_cedula');
        $medico->update();
        alert()->warning('Edición Correcta', 'MEDICO');
        return Redirect::to('datos/medico');
    }

    public function destroy($id)
    {
        $medico=Medico::findOrFail($id);
        $medico->estado='0';
        $medico->update();
        Alert::info('Eliminado', 'MÉDICO');
        return Redirect::to('datos/medico');
    }
}
