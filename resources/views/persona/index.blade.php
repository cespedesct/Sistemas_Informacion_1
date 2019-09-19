@extends('layouts.head')

@section('title', 'Personas')
@section('link3','/personas/create')
@section('content')
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
         <tr >

             <th style = "width:500px">Codigo</th>
             <th style = "width:500px">Nombre</th>
             <th style = "width:500px">Perfil</th>
             
         </tr>
     </thead>
    <tbody>
         @foreach($personas as $persona)
         <tr class="odd gradeX">
             <td>{{$persona->id}}</td>
             <td>{{$persona->nombre}}</td>
             <td>{{$persona->avatar}}</td>
             <td> <a href="/personas/{{$persona->id}}/edit" class ="btn tn-primary">Editar</a></td> 
         </tr>
         @endforeach
      </tbody>
 </table>
    
@endsection