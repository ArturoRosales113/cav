function initMap() {
 //Variables
 var pos = {
  lat: 19.542036100000015,
  lng: -96.90808484409183
 };
 var map = new google.maps.Map(document.getElementById('map'), {
  center: pos,
  zoom: 12
 });
 var infoWindow = new google.maps.InfoWindow({
  map: map
 });
// var trafficLayer = new google.maps.TrafficLayer();
 //trafficLayer.setMap(map);
 var marker = new google.maps.Marker({
  map: map,
  position: pos,
  draggable: true
 });

 //\Variables

}
