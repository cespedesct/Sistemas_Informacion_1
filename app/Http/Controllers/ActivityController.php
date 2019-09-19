<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\User;
use Finilager\bitacora;
class ActivityController extends Controller
{
    public function index(Request $request){
    
    if($request ->ajax()){
    $activities=bitacora::all();
        return response()->json($activities);
    }
        return view ('activity.index');     
    
    }
    
}
