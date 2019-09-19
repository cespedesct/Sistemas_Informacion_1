<?php

namespace FiniLager\Http\Controllers;
use FiniLager\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use FiniLager\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth'=>'verified']);
    } 
    public function index()
    {

      $users = usuario::all();  
     return view ('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('layouts.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

        $this->validate($request,[
            'name'=>'required|max:10',
            'profile_picture'=>'required|image',
            'slug'=>'requiered'
        ]);

        $user=new usuario();

       if($request->hasFile('profile_picture')){
        $file=$request->file('profile_picture');
        $name=time().$file->getClientOriginalName();
         $user->profile_picture=$name;
        $file->move(public_path().'/images/',$name);
       }

       
        $user->name=$request->input('name');
        $user->slug=$request->input('slug');
        $user->save();
         return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( usuario $user)
    {
        //$user=usuario::where('slug','=',$slug)->firstOrFail();
        //$user= usuario::find($id);
        
       return view('users.show',compact('user'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $user)
    {

        return view ('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $user)
    {
         $user->fill($request->except('profile_picture'));
          if($request->hasFile('profile_picture')){
        $file=$request->file('profile_picture');
        $name=time().$file->getClientOriginalName();
        $user->profile_picture=$name;
        $file->move(public_path().'/images/',$name);
       }

       
        $user->save();

        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
