$(document).ready(function() {
	addItem()
	animateRemoval()
	clearInput()
	geoLocate()
	latLong()

});

function latLong() {
	if (navigator.geolocation)
	      {
	      navigator.geolocation.getCurrentPosition(showPosition);
	      }
	    else
		  { 
		  document.getElementById("location").innerHTML="Geolocation is not supported by this browser.";
		  }
}

function showPosition(position)
	    {
	    document.getElementById("location").innerHTML="Latitude: " + position.coords.latitude +
	    ", Longitude: " + position.coords.longitude;
	    }


function geoLocate() {
	function initialize() {
            
              var mapOptions = {
                zoom: 8,
                size: "100%",
              };
              
              var map;
              
              
              map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);
                  
              
              
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

                var marker = new google.maps.Marker({
                map: map,
                position: pos,
                content: 'Click to zoom'
                });
                
              
                

                    map.setCenter(pos);
                  }, function() {
                    handleNoGeolocation(true);
                  });
                } else {
                  // Browser doesn't support Geolocation
                  handleNoGeolocation(false);
                }
              }
              
              function handleNoGeolocation(errorFlag) {
                if (errorFlag) {
                  var content = 'Error: The Geolocation service failed.';
                } else {
                  var content = 'Error: Your browser doesn\'t support geolocation.';
                }
              
                var options = {
                  map: map,
                  position: new google.maps.LatLng(60, 105),
                  content: content
                };
              
                var infowindow = new google.maps.InfoWindow(options);
                map.setCenter(options.position);
              }            
            
            google.maps.event.addDomListener(window, 'load', initialize);
}


function addItem(){
	var count = 1;

  $('#add-item').on("click", function(e){
  	e.preventDefault();
  	if (document.getElementById("todo-form-add").value != "") {
    $('<li class="item" id="item-num'+count+'" style="top: 999px"><p class="item_text">'+$('#todo-form-add').val()+'</p><button type="button" class="todo-list-remove" id="button-num'+count+'">Remove Item</button></li>').
    appendTo("#todo-list");

    $("#item-num"+count).animate({top:"0px"}, 800, "swing");

    clearInput();

    count++;}
  });  
}

function animateRemoval() {
	$("#todo-list").on("click", ".todo-list-remove", function(){
		$(this).parent().animate({"left":"-400px", "transform":"rotate(120deg)"}, 400, "linear", removeNoClick);
	});
}

function removeNoClick() {
	$(this).remove();
}

function clearInput(){
	$("#add-item").click(function() {
    $(this).closest('form').find("input[placeholder], textarea").val("");
	});
}