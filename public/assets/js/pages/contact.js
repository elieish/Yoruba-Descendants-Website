var Contact = function () {

    return {

        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat:-25.965242,
				lng: 22.2583
			  });
			   var marker = map.addMarker({
		            lat: -25.9652427,
					lng:  22.2583,
		            title: 'Loop, Inc.'
		        });

              map.setZoom(map.getZoom() - 12);
			});
        }

    };
}();
