@extends('layouts.head')
@section('label','Estantes')

@section('title','Nuevo Estante')
@section('content')

  <div class="body">
 <form class="form-group" method="POST" action="/estantes" enctype="multipart/form-data">
            {{ csrf_field() }} 
              <div class ="form-group">
                  <label for="">Capacidad</label>
                  <input type="number" name="capacidad" class = "form-control"> 
              </div>
      
             <div class="form-group">
             <label for="estado" >Estado</label>
                    <input name="estado" type="checkbox" class="form-control" value = "true">
            </div>

               <div>
             <label for="">Sucursal</label>
                <select id='sucursal'name="sucursal_id" class="form-control" type="number">
               <option value="" type="">Seleccione una Sucursal</option>
                    @foreach($sucursals as $sucursal)
                            <option value="{{$sucursal->id}}" type="number"> {{$sucursal->ubicacion}}</option>
                    @endforeach
                </select> 
              <a class="btn" href="/sucursales/create">Nueva Sucursal</a>

              </div>

              <div class="form-group">
               <label for="">Almacen</label>
               <select id='almacen'name="almacen_id" class="form-control" type="number">

               </select>

                     <a class="btn" href="/almacenes/create">Nuevo Almacen</a>
              </div>   
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
          </div>
    </form>
    </div>

    @endsection

    {{-- @section('script')
       <script>
            $(document).ready(function(){
                $('#sucursal').on('change',function(){
                  var sucursal_id=$(this).val();
                    
                    $.get('almacenes',{sucursal_id:sucursal_id},function(responce,almacenes){
                      console.log(responce)
                      $('#almacen').empty();
                      $('#almacen').append("<option value=''>Selecciona el Almacen</option>");
                  
                      $.each(almacenes,function(id,nombre ){
                        $('#almacen').append("<option value='" + id + "'>"+nombre+"</option>");
                      }
                     
                      
                      );
                        
                    });
                  
                });
            });

        </script>
    @endsection --}}


    @section ('script')
      <script>
        $("#sucursal").change(function(event){
          $.get("almacenes/"+event.target.value+"",function(response,state){
              $('#almacen').empty();
             $('#almacen').append("<option value=''>Selecciona el Almacen</option>");
             for (i=0;i<response.length;i++){
                $('#almacen').append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
             }
          });
        });


      </script>
    @endsection