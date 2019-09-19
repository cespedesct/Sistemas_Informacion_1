
@extends('layouts.head')

   
    <script>
    $(document).ready(function() {
        $('.main').on('click', '.delete',  function(e) {
            e.preventDefault();
            var settings={animation:700,buttons:{cancel:{action:function(){Apprise("close")},className:"gray",id:"cancel",text:"Cancel"},confirm:{action:function(){window.location=$(e.target).attr("href")},className:"red",id:"delete",text:"Delete"}},input:false,override:false}
            Apprise('<p class="center">Are you sure You want to Delete this?</p>', settings);
        });
    });
    </script>

    @section('content')
  
 
	

		<form method="post" action="agregarAlCarrito.php">

			<label for="codigo">Código de barras:</label>

			<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		</form>

		<br><br>

		<table class="table table-bordered">

			<thead>

				<tr>

					<th>ID</th>

					<th>Código</th>

					<th>Descripción</th>

					<th>Precio de venta</th>

					<th>Cantidad</th>

					<th>Total</th>

					<th>Quitar</th>

				</tr>

			</thead>

			<tbody>

			

			</tbody>

		</table>



		<h3>Total:</h3>

		<form action="./terminarVenta.php" method="POST">

			<input name="total" type="hidden" value="">

			<button type="submit" class="btn btn-success" style="color: white;">Terminar venta</button>

			<a href="./cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>

		</form>

    @endsection