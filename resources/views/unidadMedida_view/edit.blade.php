@extends("layouts.head")
@section('content')
		<form class="form-group" method="POST" action="/unidad_medidas" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class ="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class = "form-control"> 
            </div>
            

        <button type="submit" class ="btn btn-primary">Actualizar</button>
    </form> 
@endsection
