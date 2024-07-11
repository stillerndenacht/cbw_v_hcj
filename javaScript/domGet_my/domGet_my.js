"use strict";
function getWahl() {
  let wahl = document.querySelectorAll('[type= "radio"]');
  let arbeiter = document.querySelector("p").innerHTML;
  if (wahl[0].checked) {
    console.log("wahl");
    arbeiter = arbeiter + " Du!!";
  } else if (wahl[1].checked) {
    console.log("wahl");
    arbeiter = arbeiter + " Ich ??";
  } else if (wahl[2].checked) {
    console.log("wahl");
    arbeiter = arbeiter + " Wir";
  }
  document.querySelector("p").innerHTML = arbeiter;
}

let change1 = document.getElementById("dot");
function changeColor1(change1) {
  // change1 = document.getElementById("dot");
  change1.style.backgroundColor = "green";
}
function resetColor1(change1) {
  change1.style.backgroundColor = "blue";
}
let change2 = document.querySelectorAll("#dot2");
change2[0].addEventListener("mouseenter", changeColor2);
change2[0].addEventListener("mouseout", resetColor2);
function changeColor2() {
  change2[0].style.backgroundColor = "green";
}
function resetColor2() {
  change2[0].style.backgroundColor = "red";
}
let change3 = document.querySelectorAll(".dot3");
change3[0].addEventListener("mouseenter", changeColor3);
change3[0].addEventListener("mouseout", resetColor3);
function changeColor3() {
  change3[0].style.backgroundColor = "darkblue";
  change3[1].style.backgroundColor = "yellow";
}
function resetColor3() {
  change3[0].style.backgroundColor = "orange";
}
