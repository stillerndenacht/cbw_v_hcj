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
function changeColor(){
    let change = document.querySelectorAll('.dot');
    if (change[0].checked){
        element.style.backgroundcolor = "green";
    }
}
getWahl();
changeColor();
