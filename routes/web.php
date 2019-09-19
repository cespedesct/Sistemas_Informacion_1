<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//PAQUETE 1
Route::get('/ubicaciones','BasicController@ubicaciones');
Route::get('/motivos', 'MotivoController@index');//v
Route::get('/nombreProductos', 'NombreProductoController@index');//v
Route::get('/materiales', 'MaterialController@index');//v
Route::get('/modeloAños', 'ModeloAnioController@index');//v
Route::get('/categorias', 'CategoriaController@index');//v
Route::get('/segmentos', 'SegmentoController@index');//v
Route::get('/unidadMedidas', 'UnidadMedidaController@index');//v
Route::get('/cargos', 'CargoController@index');//v

Route::get('/sucursales','BasicController@sucursales');//v
Route::get('/proveedores', 'ProveedorController@index');//v
Route::get('/personas','PersonaController@index');//

//PAQUETE 2
Route::get('/telefonos', 'TelefonoController@index');//v
Route::get('/tipoProductos','TipoProductoController@index');//v
Route::get('/marcas','MarcaController@index');//v
Route::get('/almacenes','AlmacenController@index');

//PAQUETE 3
Route::get('/usuarios','UsuarioController@index');//v
Route::get('/estantes','EstanteController@index');//v
Route::get('/modelos','ModeloController@index');//v

//PAQUETE 4
//Route::get('/notaVenta','NotaVentaController@index');//v
Route::get('/notaTraspaso','NotaTraspasoController@index');//v
Route::get('/notaIngreso','NotaIngresoController@index');//v
Route::get('/productos','ProductoController@index');//v

//PAQUETE 5
Route::get('/notaEgreso','NotaEgresoController@index');//v
Route::get('/cuentaCobrar','CuentaCobrarController@index');//v
Route::get('/detalleVenta','DetalleVentaController@index');//v
Route::get('/detalleIngreso','DetalleIngresoController@index');//v
Route::get('/detalleTraspaso','DetalleTraspasoController@index');//v
Route::get('/detalleProducto','DetalleProductoController@index');//v
Route::get('/stock','StockController@index');//v

//PAQUETE 6
Route::get('/detalleEgreso','DetalleEgresoController@index');//v
Route::get('/recibos', 'ReciboController@index');//v


Route::resource('roles','RolController');


Route::group(['middleware'=>['auth']],function(){
    Route::get('/user','RolController@user')->name('user');
    Route::get('/permiso_denegado','RolController@permiso_denegado')->name('sinpermisos');

        Route::group(['middleware'=>['admin']],function(){   
                 //Paquete Administrador
            Route::get('/admin','AdminController@index')->name('admin');
   
            Route::get('/admin/quitarpermisos_adm/{userid}','AdminController@quitarPermisos_adm');
            Route::get('/admin/darpermisos_adm/{userid}','AdminController@darPermisos_adm');
            Route::get('/admin/quitarpermisos_ven/{userid}','AdminController@quitarPermisos_ven');
            Route::get('/admin/darpermisos_ven/{userid}','AdminController@darPermisos_ven');
            Route::get('/admin/quitarpermisos_alm/{userid}','AdminController@quitarPermisos_alm');
            Route::get('/admin/darpermisos_alm/{userid}','AdminController@darPermisos_alm');
            Route::get('/admin/activity','ActivityController@index');

            Route::resource('/admin/ubicaciones/','ubicacionescontroller');
            Route::resource('/admin/sucursales/','SucursalController');
            Route::resource('/admin/roles/','RolController');
            Route::resource('/admin/personas/','PersonaController');
            Route::get('/admin/personas/nota','AdminController@pdf');

        });  
        Route::group(['middleware'=>['vendedor']],function(){   
            //Paquete Vendedor
            Route::get('/vendedor','VendedorController@index')->name('vendedor');
            Route::get ('/vendedor/producto','ProductoController@index');
            Route::get ('/vendedor/plan_pago/cuotas','@');
        });    
        
        Route::group(['middleware'=>['almacenero']],function(){   
            //Paquete Almacenero
            Route::get('/almacenero','AlmaceneroController@index')->name('almacenero');
            Route::resource('/almacenero/producto/','ProductoController');
            Route::resource('/almacenero/producto/detalleproducto','DetalleProductoController');
            Route::resource('/almacenero/producto/','ProductoController');
            Route::resource('/almacenero/marca/','MarcaController');
            Route::resource('/almacenero/producto/stock/','StockController');
            //Route::get('//venta/nota','NotaVentaController@nota');
           
        });   

});



//gets
Route::get('estantes/almacenes/{id}','EstanteController@getAlmacenes');
Route::get('ubicaciones/add',function(){
    return view::make('add');
});
Route::post('ubicaciones/add',function(){
    ubicaciones::create(Input::all());
  
});





//Autentificacion
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
