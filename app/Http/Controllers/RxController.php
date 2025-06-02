<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;
use eme\Http\Requests;
use eme\Rx;
use Illuminate\Support\Facades\Redirect;
use eme\Http\Requests\RxFormRequest;
use DB;

class RxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $rx=DB::table('rx')->where('nombre','LIKE','%'.$query.'%')
        ->paginate(7);

        return view("expediente.formatos.rx.index",["rx"=>$rx,"searchText"=>$query]);
    }

    public function create()
    {
        return view("expediente.formatos.rx.create");
    }
    public function store(RxFormRequest $request)
    {
        
        $rx->save();
        return Redirect::to('expediente/formatos/rx');
    }

    public function show($id)
    {
        
        return view("expediente.formatos.rx.show",["rx"=>Rx::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("expediente.formatos.rx.edit",["rx"=>Rx::findOrFail($id)]);
    }

    public function update(RxFormRequest $request,$id)
    {
        
        $rx->update();
        return Redirect::to('expediente/formatos/rx');
    }

    public function destroy($id)
    {
        $rx=Rx::findOrFail($id);
       // $paciente->status='0';
        $rx->update();
        return Redirect::to('expediente.formatos.rx');
    }
}
