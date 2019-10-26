 // Initialize and add the map
 function initMap() {
  // The location of Uluru
  var hostel = {lat: 56.890030, lng: -4.7935728};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('googleMap'), {zoom: 15, center: hostel});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: hostel, map: map});
}