
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Finilager - @yield('label')</title>
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
<body>
    <header>
            <div style="background-color: #052c53" class="first">
                  <img style="height: 172px; width: 370px" src="/images/form-img.jpg" alt="">
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
                <h2>@yield('title')</h2>
            </div>
             <nav>
                <a class="btn" href="@yield('link1')"><i class="icon-arrow-down"></i> @yield('button1')</a>
                <a class="btn" href="@yield('link2')"><i class="icon-arrow-up"></i> @yield('button2')</a>
                <a class="btn" href="@yield('link3')"><i class="icon-plus-sign"></i>@yield('button3')</a>
            </nav>
        </div>
        <div class="body">
        <div class="product_list">
        
          <table cellpadding="" cellspacing="" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th>@yield('col_1')</th>
                            <th>@yield('col_2')</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @yield('content')
                     </tbody>
                </table>
        
    <div>

          
        </div>
        
</body>
</html>