function loadMap(){
    var pune={lat: 18.516726,lng: 73.856255};
    var map =new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: pune
    });
}
