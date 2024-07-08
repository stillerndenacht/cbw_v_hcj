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
  let num1 = prompt("start");
  let num2 = prompt("end");
  
  let end = num2;
  let start = num1;
  let y = 0;
  let prim = 0;
  var y1 = 0;
  let i = 1;
  for (let z = start; z <= end; z++) {
    
    //console.log("z1:", z, "max x:", x);
    for (y = 2; y <= z; y++) {
      if (z % y === 0 && !(z == y)) {
        // console.log(" z2:", z,  " y:", y, " %:", z % y);
        prim = 0;
        y1 = y;
        break;
      } else if (!(z==y)){
        prim = 1;
        y1 = y;
        
        // break;
        // console.log(" z2:", z, " y:", y, " %:", z % y);
      }
      
    }
    if( prim = 1 && (z % y !=0)){
      var i1 = i++;
      
     console.log("lfnr.:", i1, "\tdie Primzahl lautet z2:", z,  "\tgetestet bis Teiler y:", y1, "\t%:", z % y1);}
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
