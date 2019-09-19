@extends('layouts.head')

@section('title', 'Sucursales')
@section('label', 'Sucursales')
    {{-- ------------Botones------------------------ --}}
  
    @section('buttons')    

 
     @if(Auth::user()->tieneRol('Administrador'))
     <a class="btn" href="/admin/sucursales/create"><i class="icon-plus-sign"></i>Añadir Nueva Sucursal</a>
     @endif     
       
    @endsection


   

@section('content')
<div class="body">
         <div class="product_list">
               
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                   <thead>
                        <tr >

                            <th style = "width:500px"><right>Codigo</right></th>
                            <th style = "width:500px">Dirección</th>
                           
                            
                        </tr>
                    </thead>
                   <tbody>
                        @foreach($sucursal as $sucursal)
                        <tr class="odd gradeX">
                            <td>{{$sucursal->id}}</td>
                            <td>{{$sucursal->ubicacion}}</td>
                            <td> <a href="/sucursales/{{$sucursal->id}}" class ="btn tn-primary">Detalles</a></td> 
                            <td><a class="btn" href="/sucursales/{{$sucursal->id}}/edit"><i class="icon-pencil"></i></a></td>
                            <td><a class="btn" href="/sucursales/{{$sucursal->id}}"><i class="icon-trash"></i></a></td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
</div>
@endsection
