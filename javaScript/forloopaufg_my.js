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
  if (wurzteilb2 === 0) {
    console.log("- - - - Yeah die Wurzel von: ", x, " ist durch 2 teilbar");
  }
}
//die Bedingung in den loop verschoben
console.log(".....test break im schleifen-body.......");
for (let i = 1; ; i++) {
  console.log(i * i);
  if (i >= 10) {
    break;
  }
  // das geht auch kürzer: if (i >= 10) break;
}
console.log("....test continue......");
for (let j = 1; j < 10; j++) {
  if (j == 5) {
    continue;
  }
  console.log(j * j);
}
console.log("\v....das Einmaleins........");
let out = "";
for (a = 0; a <= 10; a++) {
  let out = "";
  for (b = 0; b <= 10; b++) {
    out = out + a * b + " ";
  }
  console.log(out);
}
console.log("\v.....Beispiel von Raj.........")
let table = "";
// h --> rows und g --> cols
for(let h = 1; h <= 10; h++) {
    
    for(let g = 1; g <= 10; g++) {
        table = table + (h*g) + "\t";
        }
        table = table + ('\n');
}
console.log(table);
