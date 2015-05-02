//BOTTOM NAV CONTROL


//Back button
$(document).on('click', '#navbutton1', function() {

	parent.history.back();
    return false;

});


//Home button
$(document).on('click', '#navbutton2', function() {

	var homeUrl = 'http://localhost/wordpress-trunk/produce';

	document.location.href = homeUrl;

});


//Cart button
$(document).on('click', '#navbutton3', function() {

	var cartUrl = 'http://localhost/wordpress-trunk/cart';

	document.location.href = cartUrl;

});


$(document).ready(function() {

	currentUrl = window.location.href;

	console.log(currentUrl);

	if (currentUrl === 'http://localhost/wordpress-trunk/produce/') {

		var homeActive = 'http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-home-active.png';

		$('#home-button-img').attr('src', homeActive);
	}

	else if (currentUrl === 'http://localhost/wordpress-trunk/cart/') {

		var homeActive = 'http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-cart-active-empty.png';

		$('#cart-button-img').attr('src', homeActive);

	}

});