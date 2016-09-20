function initialize() {
    var mapCanvas = document.getElementById("map-canvas");
	var mapOptions = {
		center: new google.maps.LatLng(40.8183166, -74.3908328),
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [
			{
				featureType: 'poi.attraction',
				elementType: 'all',
				stylers: [
					{ visibility: 'off' }
				]
			}
		]
	}
	
	var map = new google.maps.Map(mapCanvas, mapOptions);
/*
	var image = 'dj_content_j_icon.png';
	var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
*/

	var myLatLng = new google.maps.LatLng(40.82455161, -74.38968033);
	var djumpMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      animation: google.maps.Animation.DROP,
//       icon: image
      icon: 'http://destinationjumpdev.com/sites/default/files/dj_mapmarker.png'
  });

}
      
google.maps.event.addDomListener(window, "load", initialize);

