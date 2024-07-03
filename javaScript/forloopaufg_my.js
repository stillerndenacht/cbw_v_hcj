let x = 1;
let y = 10;
for (x; x <= y; x++) {
  wurz = Math.sqrt(x);
  wurzteilb2 = wurz % 2;
  console.log(
    "x: ",
    x,
    " y:",
    y,
    " wurzel:",
    wurz,
    " Division 2 Modulo: ",
    wurzteilb2
  );
  if ((wurzteilb2 === 0)) {
    console.log("Yeah die Wurzel von: ", x, " ist durch 2 teilbar");
  }
}
