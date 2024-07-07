debugger;
function primStart() {
  // let num1 = prompt("Geben Sie eine Startzahl ein");
  // let num2 = prompt(
  //   "Geben Sie eine Endzahl ein, die größer als die Startzahl ist"
  // );
  let num1 = 1;
  let num2 = 8;
  function primGo(start, end) {
    let y = 0;
    let prim = 0;
    var y1 = 0;
    let i = 1;
    for (let z = start; z <= end; z++) {
      for (y = 2; y <= z; y++) {
        if (z % y === 0 && !(z == y)) {
          prim = 0;
          y1 = y;
          break;
        } else if (!(z == y)) {
          prim = 1;
          y1 = y;
        }
      }
      if ((prim = 1 && z % y != 0)) {
        var i1 = i++;
        console.log(
          "lfnr.:",
          i1,
          "\tdie Primzahl lautet:",
          z,
          "\tgetestet bis Teiler:",
          y1
        );
      }
    }
  }

  if (num1 > num2) {
    // start = num2;
    // end = num1;
    primGo(num2, num1);
  } else if (num1 === num2) {
    console.log(
      "die Startzahl",
      num1,
      "und die Endzahl",
      num2,
      "sind identisch."
    );
  } else if (typeof num1 != "number" || typeof num2 != "number") {
    console.log("Bitte geben sie ausschließlich Zahlen ein!");
  } else {
    // start = num1;
    // end = num2;
    primGo(num1, num2);
  }
}

primStart();
