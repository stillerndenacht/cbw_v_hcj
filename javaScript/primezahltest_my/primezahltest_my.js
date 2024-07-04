// let num1 = document.getElementById("num_s").value;
// let num2 = document.getElementById("num_e").value;
// function primStart() {
//   let num1 = document.getElementById("num_s").value;
//   let num2 = document.getElementById("num_e").value;
//   let ausg;
//   ausg = ausg + num1 + " " + num2;
//   document.getElementById(out).innerHTML = ausg;
// }
debugger
function primStart() {
  // let num1 = prompt("start");
  // let num2 = prompt("end");
  let num1 = 1;
  let num2 = 20;
  for (x = num1; x <= num2 / 2; x++) {
    for (y = num2; y > 2; y--) {
      let primq = y % x;
      if (primq === 0) {
        console.log(x, "ist eine Primzahl");
      }
    }
  }

//   let numbers = "";
//   numbers = numbers + num1 + "\t" + num2;
//   console.log(numbers);
}
primStart();
