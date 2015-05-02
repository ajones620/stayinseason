
//Info button handler
$(document).on('click', '.card-sidebar-button-info', function() {

	var urlBase = 'http://localhost/wordpress-trunk/'


	//will probably need to change this once you have the php template updated
	var item = this.parentNode.parentNode.id;

	newUrl = urlBase.concat(item);

	document.location.href = newUrl;

	return false;

});


//Cart button handler
$(document).on('click', '.card-sidebar-button-cart', function() {

	// some code for putting item into cart

	// more code for animation/visual feedback

	$(this).css({'-webkit-animation': 'cart-bounce 1s normal forwards ease-in-out'});

	$(this).next().css({'-webkit-animation': 'info-reverse-bounce 1s normal forwards ease-in-out'});

	return false;

});

$(document).scroll(function(){
    if ($(this).scrollTop()>30){
        // animate fixed div to small size:
        $('.item-detail-banner').stop().animate({ 'height': '40', 'line-height': '40' }, {duration: 100, queue: false});
    } else if ($(this).scrollTop()<100) {
        //  animate fixed div to original size
        $('.item-detail-banner').stop().animate({ 'height': '100', 'line-height': '100' }, {duration: 250, queue: false});
    }
}); 