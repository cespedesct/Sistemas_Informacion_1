

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Finilager - Crear Usuarios</title>
    <meta name="viewport" content="width=device-width">
   <!--  <script>
        var SITEURL = 'http://www.visualcohol.com/lab/scripts/theinventory/index.php/';
        var CURRENT_URL = 'http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/list';
        var BASEURL = 'http://www.visualcohol.com/lab/scripts/theinventory';
    </script> -->

    <link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/jquery.dataTables.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/apprise-v2.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/style.css" media="all" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Headland+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/jquery-1.9.1.min.js"></script>
<script src="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/bootstrap.min.js"></script>
<script src="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/jquery.dataTables.min.js"></script>
<script src="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/apprise-v2.min.js"></script>
<script src="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/tooltip-image.js"></script>

    <script>
    $(document).ready(function() {
        $('.main').on('click', '.delete',  function(e) {
            e.preventDefault();
            var settings={animation:700,buttons:{cancel:{action:function(){Apprise("close")},className:"gray",id:"cancel",text:"Cancel"},confirm:{action:function(){window.location=$(e.target).attr("href")},className:"red",id:"delete",text:"Delete"}},input:false,override:false}
            Apprise('<p class="center">Are you sure You want to Delete this?</p>', settings);
        });
    });
    </script>
</head>
    <body style="background-color: #f4f4f4">

    <header>

            <div style="background-color: #052c53" class="first">
                  <img style="height: 172px; width: 370px" src="/images/form-img.jpg" alt="">
                  <nav>
                        <ul>
                            <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/list">  </a></li>
                            <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/transaction/list/overview"></a></li>
                        </ul>
                    </nav> 
               
            </div>
             <div class="second">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/user/edit/6"></a>
                            </li>
                                                        <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/auth/logout">Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/list"></a>
                            </li>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/category/list"></a>
                            </li>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/contact/list"></a>
                            </li>
                                                    </ul>
                    </nav>
                </div>
            </div>
    </header>  
    <div class="main container" >
       <div class="head">
            <div class="title">
                <h2>Detalles de Ventas</h2>
            </div>
           
        </div>





	<div class="col-xs-12">

		<div>

			<a class="btn btn-success" href="./vender.php">Nueva Venta <i class="fa fa-plus"></i></a>

		</div>

		<br>

		<table class="table table-bordered">

			<thead>

				<tr>

					<th>Número</th>

					<th>Fecha</th>

					<th>Productos vendidos</th>

					<th>Total</th>

					<th>Eliminar</th>

				</tr>

			</thead>

			<tbody>

			

				<tr>

					<td></td>

					<td></td>

					<td>

						<table class="table table-bordered">

							<thead>

								<tr>

									<th>Código</th>

									<th>Descripción</th>

									<th>Cantidad</th>

								</tr>

							</thead>

							<tbody>

								
								<tr>

									<td></td>

									<td></td>

									<td></td>

								</tr>

							

							</tbody>

						</table>

					</td>

					<td></td>

					<td><a class="btn btn-danger" href=""><i class="icon-trash"></i></a></td>

				</tr>

			
			</tbody>

		</table>

	</div>
	</body>
</html>

