function toogleMenue() {
  var elem = document.getElementById("myTopnav");
  if (elem.className === "topnav") {
	elem.className += " responsive";
  } else {
	elem.className = "topnav";
  }
}