var Contact = function () {

    return {

        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat:-29.8583,
				lng: 31.0234
			  });
			   var marker = map.addMarker({
		            lat: -13.004333,
					lng: -38.494333,
		            title: 'Loop, Inc.'
		        });
			});
        }

    };
}();
