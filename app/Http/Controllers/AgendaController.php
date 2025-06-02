<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;

use eme\Http\Requests;
use eme\Paciente;
use Illuminate\Support\Facades\Redirect;
//use eme\Http\Requests\PacienteFormRequest;
use DB;

class AgendaController extends Controller
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
        ->orderBy('created_at','desc')
        ->paginate(7);

        return view("datos.agenda.index",["paciente"=>$paciente,"searchText"=>$query]);
         
    }

    public function create()
    {
        //return view("datos.generales.create");
    }
    public function store(PacienteFormRequest $request)
    {
        
    }

    public function show($id)
    {
        
        //return view("datos.generales.show",["paciente"=>Paciente::findOrFail($id)]);
        
    }

    public function edit($id)
    {
        //return view("datos.generales.edit",["paciente"=>Paciente::findOrFail($id)]);
    }

    public function update(PacienteFormRequest $request,$id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
