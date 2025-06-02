<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\Laboratorio;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\LaboratorioFormRequest;
use DB;

class LaboratorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $lab=DB::table('lab')->where('nombre','LIKE','%'.$query.'%')
        ->paginate(7);

        return view("expediente.formatos.lab.index",["lab"=>$lab,"searchText"=>$query]);
    }

    public function create()
    {
        return view("expediente.formatos.lab.create");
    }
    public function store(LaboratorioFormRequest $request)
    {
        
        $lab->save();
        return Redirect::to('expediente/formatos/lab');
    }

    public function show($id)
    {
        
        return view("expediente.formatos.lab.show",["lab"=>Laboratorio::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("expediente.formatos.lab.edit",["lab"=>Laboratorio::findOrFail($id)]);
    }

    public function update(laboratorioFormRequest $request,$id)
    {
        
        $lab->update();
        return Redirect::to('expediente/formatos/lab');
    }

    public function destroy($id)
    {
        $lab=Laboratorio::findOrFail($id);
       // $paciente->status='0';
        $lab->update();
        return Redirect::to('expediente.formatos.lab');
    }
}
