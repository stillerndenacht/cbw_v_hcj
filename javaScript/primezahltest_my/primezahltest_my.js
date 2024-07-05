// let num1 = document.getElementById("num_s").value;
// let num2 = document.getElementById("num_e").value;
// function primStart() {
//   let num1 = document.getElementById("num_s").value;
//   let num2 = document.getElementById("num_e").value;
//   let ausg;
//   ausg = ausg + num1 + " " + num2;
//   document.getElementById(out).innerHTML = ausg;
// }
debugger;
function primStart() {
  // let num1 = prompt("start");
  // let num2 = prompt("end");
  // let num1 = 1;
  // let num2 = 1;
  // for (let x = 20; x  > 2; x--) {
  //   for (let y = num2; y <= x/2; y++) {
  //     //let primq = y % x;
  //     if (x % y != 0) {
  //       console.log(x, y, "ist eine Primzahl", y % x);
  //       break;
  //     }
  //   }
  let x = 20;
  let y = 2;
  for (let y = 3; y <= x ; y++) {
    if (x % y != 0 && y != x) {
      console.log("x: ", x, "y: ", y, "% ", x % y);
    }
  }
}

//   let numbers = "";
//   numbers = numbers + num1 + "\t" + num2;
//   console.log(numbers);

primStart();

// ........ Vorlage für Einbinden.....
// document.querySelector('#nname').onblur = function() {
//   var txt = "<b>Ihre Eingabe:</b> " + this.value;
//   /* Gespeicherten Wert des Textfeldes in txt prüfen */
//   document.querySelector('p').innerHTML = txt;
// };
