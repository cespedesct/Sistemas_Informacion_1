@extends('layouts.basic')
@section ('title','Nuestras Direcciones') 
   @section ('top_bar_btn_1','Iniciar Sesión')
@section ('top_bar_btn_2','Registrarse')

@section('content')

        <link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
    .container1{
	height: 300px;	
		
	}
    #map{
        witdh:100%;
        height:100%;
        border: 1px;
    }
</style>


        <div class="body">
            <div class="container1">
            <div id="map" style="height: 300px; width: 900px;"></div>  
            </div>
        </div>
    

<script> function loadMap(){
   
    var point={lat: -17.78366995136386,lng: -63.180249745483366};
    var map =new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: point
    });
    var i;
    var ubicaciones=<?php echo $ubicaciones;?>  
    for(i=0;i<ubicaciones.length;i++){
    var punto={lat:parseFloat(ubicaciones[i].lat),lng:parseFloat(ubicaciones[i].lang)}
    var marker =new google.maps.Marker({
        position:punto,
        map:map,
        draggable: false
    });
    }
   
}

</script>
    <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCIw8uSw-xfgm_gB049CnGThd1kVby0F-s&callback=loadMap"
        ></script> 
        

    @endsection