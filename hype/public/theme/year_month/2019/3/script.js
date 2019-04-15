
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
	$('#hype').addClass('visible');
	$(cardID).addClass(' visible');
	console.log('card should be visible');
}

function hideCard() {
	$('.visible').removeClass('visible');
	$('#hype').removeClass('visible');
}
