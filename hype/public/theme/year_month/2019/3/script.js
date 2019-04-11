function toggleMenu() {
  var x = document.getElementById("site-nav-links");
  if (x.className === "site-nav-links not-visible") {
    x.className = "site-nav-links visible";
  } else {
    x.className = "site-nav-links not-visible";
  }
}