
function toggleMenu() {
  var x = document.getElementById("site-nav-links");
  if (x.className === "site-nav-links not-visible") {
    x.className = "site-nav-links visible";
  } else {
    x.className = "site-nav-links not-visible";
  }
}

function showCard(id) {
	let cardID = '#card-' + id;
	//add blur
	$('#splash').addClass(' blur');
	$('#grid').addClass(' blur');

	$('#hype').addClass('visible');
	$(cardID).addClass(' visible');
	console.log('card should be visible');
}

function hideCard() {
	let $blur = $('.blur');
	for(let i = 0; i < $blur.length; i++) {
		$( $blur[i] ).removeClass('blur');
	}

	$('.visible').removeClass('visible');
	$('#hype').removeClass('visible');
}
