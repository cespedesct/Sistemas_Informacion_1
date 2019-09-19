@extends('layouts.head')
@section('label','Administrador')

@section('content')
<div class="body">
         <div class="product_list">
               
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                   <thead>
                        <tr >

                            <th style = "width:500px"><right>Nombre</right></th>
                            <th style = "width:500px">Correo</th>
                           
                            
                        </tr>
                    </thead>
                   <tbody>
                        @foreach($users as $user)
                        <tr class="odd gradeX">

                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>           
                                @foreach ($user->roles as $rol )
                                    <td><small class="text-muted">{{$rol->nombre}}</small></td>
                                @endforeach
                                @if($user->id!=Auth::user()->id)
                                    @if($user->tieneRol('Administrador'))
                                    <td><a class="btn" href="/admin/quitarpermisos_adm/{{$user->id}}"><i class="icon-trash"></i>Admin</a></td>
                                    
                                        @else
                                        <td><a class="btn" href="/admin/darpermisos_adm/{{$user->id}}"><i class="icon-plus-sign"></i>Admin</a></td>

                                    @endif
                                     @if($user->tieneRol('Vendedor'))
                                    <td><a class="btn" href="/admin/quitarpermisos_ven/{{$user->id}}"><i class="icon-trash"></i>Vendedor</a></td>
                                    
                                        @else
                                        <td><a class="btn" href="/admin/darpermisos_ven/{{$user->id}}"><i class="icon-plus-sign"></i>Vendedor</a></td>

                                    @endif
                                    @if($user->tieneRol('Almacenero'))
                                    <td><a class="btn" href="/admin/quitarpermisos_alm/{{$user->id}}"><i class="icon-trash"></i>Almacenero</a></td>
                                    
                                        @else
                                        <td><a class="btn" href="/admin/darpermisos_alm/{{$user->id}}"><i class="icon-plus-sign"></i>Almacenero</a></td>

                                    @endif
                                  
                                @endif
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
</div>



@endsection