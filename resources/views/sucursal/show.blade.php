@extends('layouts.head')
@section('title','Detalle de Sucursal')
@section('content')

        <link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
    .container1{
	height: 300px;	
		
	}
    #map{
        witdh:100%;
        height:100%;
        border: 1px ;
    }
</style>
     <h5>{{$sucursal->ubicacion}}</h5> 


    <div class="body" style="width: 400px; height: 250px;">
        <div class="container1">
        <div id="map" style="height: 250px; width: 400px;"></div>   
        </div>
    </div>

<script> function loadMap(){
    var point={lat: {{$ubicacion->lat}},lng: {{$ubicacion->lang}}};
    var map =new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: point
    });
    var marker =new google.maps.Marker({
        position: point,
        map:map,
        draggable: false
    });
    
}

</script>
    <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCIw8uSw-xfgm_gB049CnGThd1kVby0F-s&callback=loadMap"
        ></script> 
        

    @endsection

