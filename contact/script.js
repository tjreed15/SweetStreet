function initializeMap(){
	var geocoder = new GClientGeocoder();
	var latlngbounds = new GLatLngBounds();
	var map = new GMap2(document.getElementById('map'));
	var locations = [];
	locations.push(['301 Hartz Ave., Suite 109<br /> Danville, CA 94526', '301+Hartz+Ave.%2C+Suite+109+Danville%2C+CA+94526']);
	$.each(locations, function(i, loc) {
		geocoder.getLatLng(loc[1], function(point) {
			map.setCenter(new GLatLng(0, 0), 0);
			var marker = new GMarker(point);
			map.addOverlay(marker);
			GEvent.addListener(marker, 'click', function() {
				var content = 
					'<p>' + 
						'<a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&q=' + loc[1] + '&ie=UTF8&view=map" style="color:#000; text-decoration:none;" target="_blank">' +
							'<strong style="color:#f00" >Sweet Street</strong><br>' + loc[0] + 
						'</a><br><br>' + 
					'</p>' +
					'<p>' +
						'<a href="https://maps.google.com/maps?f=d&source=s_q&hl=&q=' + loc[1] + '&ie=UTF8&hq=&hnear=' + loc[1] + '&spn=0.004918,0.00633&t=m&z=16&vpsrc=0&iwloc=A&daddr=' + loc[1] + '" target="_blank">' + 
							'Directions' +
						'</a>' + 
					'</p>';
				map.openInfoWindowHtml(point, content);
			});
			latlngbounds.extend(point);
			var zoomLevel = map.getBoundsZoomLevel(latlngbounds);
			zoomLevel = zoomLevel > 13 ? 13 : zoomLevel;
			map.setCenter(latlngbounds.getCenter(), zoomLevel);
		});
	});
	var mapTypeControl = new GMapTypeControl();
	var topRight = new GControlPosition(G_ANCHOR_TOP_RIGHT, new GSize(10,10));
	map.addControl(mapTypeControl, topRight);
	map.addControl(new GSmallMapControl());
}