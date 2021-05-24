// This example creates a 2-pixel-wide red polyline showing the path of
function initMap() {
  $("#map").css({ "height": "427px", "width": "100%" });
  var geocoder = new google.maps.Geocoder();
  var locationss = [];
  let flightPlanCoordinates = [];
  $(".location").each(function () {
      var location = $(this).val()
      locationss.push(location);
  });
 console.log(locationss);
  locationss.map((a,index)=>{
    let latlng={};
    geocoder.geocode({
        'address': a,

    }, function (results, status) {
     
        if (status == google.maps.GeocoderStatus.OK) {

          latitude = results[0].geometry.location.lat();
          longitude = results[0].geometry.location.lng();
          latlng.lat=latitude;
          latlng.lng=longitude;
          flightPlanCoordinates.push(latlng);
          var options = {
            zoom: 6,
            center: {
                lat: flightPlanCoordinates[index].lat,
                lng: flightPlanCoordinates[index].lng
            }

        };
        var map = new google.maps.Map(document.getElementById('map'), options);
       flightPlanCoordinates.map(mak=>{
        const marker = new google.maps.Marker({
          position: {
              lat: mak.lat,
              lng: mak.lng
          },
          map: map,
      });
      const flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 3,
          });
        
          flightPath.setMap(map);
       });
        
        }
        
      });
});
}