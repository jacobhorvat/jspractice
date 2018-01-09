function initMap() {

	var alcatraz_combo_tours = {
		info: '<strong>Alcatraz Combo Tours</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="">Get Directions</a>',
		lat: 37.809394,
		long: -122.411806,
	};

	var gocar_fishermans = {
		info: '<strong>Gocar Tours</strong><br>\
					1025 W Belmont Ave<br> Chicago, IL 60657<br>\
					<a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
		lat: 37.807072,
		long: -122.416147
	};

	var gocar_union_square = {
		info: '<strong>Gocar Tours</strong><br>\r\
					Golden Gate Park<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 37.786314,
		long: -122.409857
	};
  var segway_fishermans = {
		info: '<strong>Segway Tour</strong><br>\r\
					6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
					<a href="">Find Tour</a>',
		lat: 37.806443,
		long: -122.421217
	};
  var segway_golden_gate = {
    info: '<strong>Segway Tour</strong><br>\r\
          6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
          <a href="https://alcatrazcombotours.com/collections/segway-tours/products/the-official-golden-gate-park-segway-tour">Find Tour</a>',
    lat: 37.769938,
    long: -122.469381
  };
  var segway_vip = {
    info: '<strong>Segway VIP Tour</strong><br>\r\
          6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
          <a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
    lat: 37.807104,
    long: -122.415959
  };
  var alcatraz_cruises = {
    info: '<strong>Alcatraz Crusies</strong><br>\r\
          The adventure to Alcatraz leaves from here.<br> Chicago, IL 60626<br>\
          <a href="">Find Tour</a><br>',
    lat: 37.806741,
    long: -122.404401
  };


	var locations = [
      [alcatraz_combo_tours.info, alcatraz_combo_tours.lat, alcatraz_combo_tours.long,0],
      [gocar_fishermans.info, gocar_fishermans.lat, gocar_fishermans.long, 1],
      [gocar_union_square.info, gocar_union_square.lat, gocar_union_square.long, 2],
      [segway_fishermans.info, segway_fishermans.lat, segway_fishermans.long, 3],
      [segway_golden_gate.info, segway_golden_gate.lat, segway_golden_gate.long, 4],
      [segway_vip.info, segway_vip.lat, segway_vip.long, 5],
      [alcatraz_cruises.info, alcatraz_cruises.lat, alcatraz_cruises.long, 6],
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(37.777979, -122.430242),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
