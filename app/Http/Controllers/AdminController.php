<?php

namespace Finilager\Http\Controllers;
use Finilager\User;
use Finilager\Rol;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::with('roles')->get();
        return view ('rol.admin',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function darPermisos_adm($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Administrador')->firstOrFail();
        $user->roles()->attach($adminrol->id);

        return redirect ('/admin');
    }

    public function quitarPermisos_adm($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Administrador')->firstOrFail();
        $user->roles()->detach($adminrol->id);

        return redirect ('/admin');
    }
    public function darPermisos_ven($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Vendedor')->firstOrFail();
        $user->roles()->attach($adminrol->id);

        return redirect ('/admin');
    }

    public function quitarPermisos_ven($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Vendedor')->firstOrFail();
        $user->roles()->detach($adminrol->id);

        return redirect ('/admin');
    }

    public function darPermisos_alm($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Almacenero')->firstOrFail();
        $user->roles()->attach($adminrol->id);

        return redirect ('/admin');
    }

    public function quitarPermiso_alm($userid){
        $user=User::where('id',$userid)->firstOrFail();
        $adminrol=Rol::where('nombre','Almacenero')->firstOrFail();
        $user->roles()->detach($adminrol->id);

        return redirect ('/admin');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function nota(){
        $Users=User::all();
        return view ('notaVenta.note',compact('Users'));
      }
    public function get_user_data(){
        $users=User::all();
        return ('users');
    }
    function pdf(){
      $pdf=\App::make('dompdf.wrapper');  
      $pdf->loadHTML($this->convert_userdata());
      return $pdf->stream();
 
    }

    function convert_userdata(){
        $customer_data = User::all();
        $output = '
        <h3 align="center">Customer Data</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
         <tr>
       <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
       <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
  
      </tr>
        ';  
        foreach($customer_data as $customer)
        {
         $output .= '
         <tr>
          <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
          <td style="border: 1px solid; padding:12px;">'.$customer->email.'</td>
        
         </tr>
         ';
        }
        $output .= '</table>';
        return $output;
    }
}
