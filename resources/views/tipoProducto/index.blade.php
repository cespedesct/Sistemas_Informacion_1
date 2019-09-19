@extends('layouts.head')

@section('title','Tipo de Producto')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Finilager</title>
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
<body><header>
            <div style="background-color: #052c53" class="first">
                  <img style="height: 172px; width: 370px" src="/images/form-img.1.jpg" alt="">
                  <nav>
                        <ul>
                            <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/list">Inventory</a></li>
                            <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/transaction/list/overview">Transactions</a></li>
                        </ul>
                    </nav> 
               
            </div>
            <div class="second">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/user/edit/6">Demo</a>
                            </li>
                                                        <li><a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/auth/logout">Logout</a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/list">Items</a>
                            </li>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/category/list">Categories</a>
                            </li>
                                                        <li>
                                <a href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/contact/list">Contacts</a>
                            </li>
                                                    </ul>
                    </nav>
                </div>
            </div>
    </header>    <div class="main container">
        <div class="head">
            <div class="title">
                <h2>Tipos de Productos</h2>
            </div>
             <nav>
                <a class="btn" href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/checkin"><i class="icon-arrow-down"></i> Registrar Ingreso</a>
<a class="btn" href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/checkout"><i class="icon-arrow-up"></i> Registrar Salida</a>
<a class="btn" href="http://www.visualcohol.com/lab/scripts/theinventory/index.php/item/add"><i class="icon-plus-sign"></i> Añadir Producto</a>            </nav>
        </div>
        <div class="body">
            <script>
            $(document).ready(function() {
                $('#example').dataTable({
                    "fnDrawCallback": function( oSettings ) {
                      $('a.screenshot').imgPreview( {imgCSS: { width: 300, height: 300 }} );
                    },
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "http://www.visualcohol.com/lab/scripts/theinventory/index.php/ajax/item_basic",
                    "iDisplayLength": 50,
                    "aaSorting": [[ 1, "asc" ]],
                    "oLanguage": {"sUrl": "http://www.visualcohol.com/lab/scripts/theinventory/app/assets/js/jquery.dataTables.en.txt"}
                });
            });code
            </script>
            <div class="product_list">
                <div class="message">
                                    </div>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                   <thead>
                        <tr >

                            <th style = "width:1500px">Codigo</th>
                            <th style = "width:1500px">Nombre</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                          </tr>
                                                <tr class="odd gradeX">
                            <td></td>
                            <td></td>
                            
                        </tr>
                                            </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
</body>
</html>

@endsection