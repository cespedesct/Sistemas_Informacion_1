@extends('layouts.list')
					
                    @section('title','Segmentos')
                    
                    @section('link3','/segmentos/create')
                    @section('col_1','Codigo')
                    @section('col_2','Nombre')

                    @section('content')
					
						@foreach($segmentos as $segmento)
                        <tr class="odd gradeX">
                            <td>{{$segmento->id}}</td>
                            <td>{{$segmento->nombre}}</td>
                          {{-- <td> <a href="/unidad_medidas/{{$unidadMedida->id}}/edit" class ="btn tn-primary">Editar</a></td>  --}}
                        </tr>
                        @endforeach
                    @endsection

