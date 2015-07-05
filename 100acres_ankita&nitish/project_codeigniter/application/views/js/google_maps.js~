function clearAll(){
        document.getElementById('property_posting_form').reset();
      }
    var geocoder, map, z=10, markersArray = [];
    var flag=0;

    function clearOverlays() {
      for (var i = 0; i < (markersArray.length-1); i++ ) {
      markersArray[i].setMap(null);
      }
    }
    function initialize() {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(28.615144659246887, 77.21039449101568);
      var mapOptions = {
        zoom: 8,
        center: latlng
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    }
    function city_clicked(){
      document.getElementById('property_locality').value='';
      document.getElementById('society').value='';
      document.getElementById('panel').style.visibility='hidden';
      flag=0;
      z=10;
      codeAddress();
    }
    function locality_clicked(){
      z=12;
      document.getElementById('society').value='';
      document.getElementById('panel').style.visibility='hidden';
      flag=0;
      codeAddress();
    }
    function society_clicked(){
      z=14;
      flag=1;
      codeAddress();
    }
    function codeAddress() {
      var address1 = document.getElementById('property_city').value;
      var address2 = document.getElementById('property_locality').value;
      var address3 = document.getElementById('society').value;
      var address = address1.concat(address2);
      address=address.concat(address3);

      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var latlon=results[0].geometry.location;
          var split_latlon=latlon.toString().split(",");
          split_latlon[0]=split_latlon[0].substring(1);
          split_latlon[1]=split_latlon[1].substring(0,split_latlon[1].length-1);
          document.getElementById('latBox').value=split_latlon[0];
          document.getElementById('lonBox').value=split_latlon[1];
          map.setCenter(latlon);
          map.setZoom(z);
          var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location,
              title: 'Set this place as your property',
              draggable: true
          });
          markersArray.push(marker);
          clearOverlays();
          google. maps.event.addListener(marker,'dragend',function(event){
          document.getElementById("latBox").value=event.latLng.lat();
          document.getElementById("lonBox").value=event.latLng.lng();
          });
        }
        else {
          if(flag==1){
            document.getElementById('panel').style.visibility='visible';
            document.getElementById('display_map_error').innerHTML="Cannnot find your property. Move the marker to set your property.";
          }
        }
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);