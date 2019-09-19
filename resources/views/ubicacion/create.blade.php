
@extends('layouts.head')
@section('content')

     
<style type="text/css">
    .container1{
	height: 300px;
    witdh: 50px;	
		
	}
    #map{
        witdh:100%;
        height:100%;
        border: 1px solid blue;
    }
</style>

        <div class="body">
            <div class="col-md-auto">
                 <a class="btn" href="/sucursales/create"><i class="icon-arrow-left"></i> Volver</a>
                
                <div class ="container1" style="width: 300px; position: relative; left: 250px; ">
                  <label for="">Mapa</label>
                    <input type="text" id="searchmap">
                    <div id="map"></div>
                </div>
            </div>
               
            <div class="col-md-auto">
                <form class="form-group" method="POST" action="/admin/ubicaciones" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                        <div class ="form-group">
                            <label for="">Añadir Marcador de Ubicacion</label>
                            <input type="text" class="form-control input-sm" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>
                            <div class="col-md-1">
                                <input name="estado" type="checkbox" class="form-control" value = "true">
                            </div>
                        </div>
                        <div class ="form-group">
                            <label for="">Latitud</label>
                            <input type="text" class="form-control input-sm" name="lat" id="lat">
                        </div>
                        <div class ="form-group">
                            <label for="">Longitud</label>
                            <input type="text" class="form-control input-sm" name="long" id="lng">
                        </div>
                    
                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>  
                </form>  
            </div>
        </div>
        
    {{-- <script>
        var map=new google.maps.Map(document.getElementById('map-canvas'),{
           center:{
               lat:27.72,
                lng: 85.36
           },
           zoom:15
        });
    </script>
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCIw8uSw-xfgm_gB049CnGThd1kVby0F-s&libraries=places"
type="text/javascript"></script>  --}}
<script> function loadMap(){
    

    var scz={lat: -17.78366995136386,lng: -63.180249745483366};
    var map =new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: scz
    });
     var marker =new google.maps.Marker({
        position: scz,
        map:map,
        draggable: true
    });
var searchbox=new google.maps.places.SearchBox(document.getElementById('searchmap'));

google.maps.event.addListener(searchbox,'places_changed',function(){
    var places=searchbox.getPlaces();
    var bounds= new google.maps.LatLngBounds();
    var i,place;
    for(i=0;place=places[i];i++){
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location);
    }
    map.fitBounds(bounds);
    map.setZoom(15);
});

google.maps.event.addListener(marker,'position_changed',function(){
        var lat=marker.getPosition().lat();
        var lng=marker.getPosition().lng();
        console.log(lat);                
         console.log(lng);                
            $('#lat').val(lat);
             $('#lng').val(lng);
              
});
 

}




</script>

    <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCIw8uSw-xfgm_gB049CnGThd1kVby0F-s&callback=loadMap&libraries=places"
        ></script>
        {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCIw8uSw-xfgm_gB049CnGThd1kVby0F-s&libraries=places"
       type="text/javascript" ></script>  --}}
          
@endsection