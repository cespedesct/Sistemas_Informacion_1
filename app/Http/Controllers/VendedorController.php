<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index(){
     return view ('vendedor.index');
    }
   

}
