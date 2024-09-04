function iniciarMap(){
    var coord = {lat:17.982592101564087 ,lng: -92.94010644376401};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}