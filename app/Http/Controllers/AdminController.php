<?php

namespace eme\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function__contruct()
    {

    	$this->middleware('auth');
    }
}
