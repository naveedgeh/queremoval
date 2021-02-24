

function initMap(loc1=null){
  let map;
  let markersArray = [];
  let markers=[];
  var locationss = [];
  let polyline = null;
  let long=[];
  let pickup=$("#pickup").val();
  let dropoff=$("#dropoff").val();
  if(loc1!=null){
    setMapOnAll(null);
    markers=[];
   

  
    // console.log( JSON.stringify(markers[0]) );

    // setMapOnAll(null);                  // Clear all markers from the map

    // var tempArray = markers;            // Create a temporary array
    // unset( tempArray[index] );          // Unset the marker to remove
    // markers = array_values(tempArray);
  }
  $("#map").css({ "height": "427px", "width": "100%" });
  
    // $(".location").each(function () {
       
    //     var location = $(this).val()
    //     locationss.push(location);
    // });
    $("#pickup").keydown(function(){
      $(this).val('');
      markers.setMap(null);
      
   });
    if(pickup!=''){
      var geocoder = new google.maps.Geocoder(); 
      geocoder.geocode({
        'address':pickup,
      },function(results,status) {
          if(status==google.maps.GeocoderStatus.OK){
            latitude=results[0].geometry.location.lat();
            langitude=results[0].geometry.location.lng();
          }
          var options={
            zoom:5,
            center:{
            lat:latitude,
            lng:langitude
            }
          }
          map = new google.maps.Map(document.getElementById('map'),options);
          let marker = new google.maps.Marker({
                                map: map,
                                position:{lat:latitude,lng:langitude},
                                draggable:true,
                            });
  
                  markers.push(marker);
      });
    }
    
    
    

//    console.log(locationss);
    // for (let i = 0; i < locationss.length; i++) {
    //     long[i] = [];

    //     geocoder.geocode({
    //         'address': locationss[i],

    //     }, function (results, status) {
                
    //         if (status == google.maps.GeocoderStatus.OK) {

    //             latitude = results[0].geometry.location.lat();
    //             longitude = results[0].geometry.location.lng();

    //             long[i][0] = latitude;
    //             long[i][1] = longitude;
    //             var options = {
    //                 zoom: 5,
    //                 center: {
    //                     lat: long[i][0],
    //                     lng: long[i][1]
    //                 }

    //             };
    //             var map = new google.maps.Map(document.getElementById('map'), options);
            
    //             for (let index = 0; index < long.length; index++) {
    //                 lat1=long[index][0];
    //                 lng1=long[index][1];
    //                 // let marker = new google.maps.Marker({
    //                 //     map: map,
    //                 //     position: latLng,
    //                 //     draggable: true
    //                 // });
                    
    //                 let marker = new google.maps.Marker({
    //                     map: map,
    //                     position:{lat:long[index][0],lng:long[index][1]},
    //                     draggable: false,
    //                 });
    //                 markers.push(marker);
    //                   marker.addListener('position_changed', function() {
    //                     drawPolyline();
    //                   });
    //                 //drawPolyline(); 
                
    //                   //store the marker object drawn in global array
    //                   markersArray.push(marker);
    //                 //console.log(markersArray);
    //             }

    //         }
    //     });
    // }
}