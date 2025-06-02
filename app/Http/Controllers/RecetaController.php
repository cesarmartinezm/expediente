<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\Receta;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\RecetaFormRequest;
use DB;

class RecetaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $receta=DB::table('receta')->where('nombre','LIKE','%'.$query.'%')
        ->paginate(7);

        return view("expediente.formatos.nurgecias.index",["receta"=>$receta,"searchText"=>$query]);
    }

    public function create()
    {
        $paciente=DB::table('paciente')
        ->select('idpaciente','apaterno','amaterno','nombre','ocupacion')
        ->where('estado','=','1')
        ->orderby('apaterno','desc')
        ->get();
        //$medicamento=DB::table('medicamentos')->get();

        return view("expediente.formatos.receta.create",['paciente'=>$paciente]);
    }
    public function store(NUrgenciasFormRequest $request)
    {
        $receta = new NUrgencias;
        
        $receta->save();
        return Redirect::to('expediente/formatos/receta');
    }

    public function show($id)
    {
        
        return view("expediente.formatos.receta.show",["receta"=>Receta::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("expediente.formatos.receta.edit",["receta"=>Receta::findOrFail($id)]);
    }

    public function update(RcetaFormRequest $request,$id)
    {
        
        $receta->update();
        return Redirect::to('expediente/formatos/receta');
    }

    public function destroy($id)
    {
        $receta=Receta::findOrFail($id);
       // $paciente->status='0';
        $receta->update();
        return Redirect::to('expediente/formatos/receta');
    }
}
