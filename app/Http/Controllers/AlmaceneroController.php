<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;

class AlmaceneroController extends Controller
{
    public function index(){
        return view ('almacenero.index');
    }
}
