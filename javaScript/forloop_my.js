for (let i = 1; i <= 6; i++) {
  console.log(1 * i);
}
// for (Startwert; Abbruchbedingung - also letze die gemacht wird; Itterationsschritte){was damit gemacht werden soll}
for (let q = 1; q <= 10; q++) {
  console.log("das Quadrat von ", q, " ist: ", q ** 2);
}
//ein leerer String wird erstellt "out"
let out = "";
for (let qq = 1; qq <= 10; qq += 2) {
  //das Quadrat wird berechnet "quadr"
  let quadr = qq ** 2;
  // hier wird der string zusammengesetzt, die erste Variante ist die Kurzform
  //out += quadr + " ";
  out = out + quadr + " ";
}
console.log(out);

//oder noch etwas kürzer ohne die Zwischenvariable

let out2 = "";
for (let y = 1; y <= 10; y += 2) {
  out2 = out2 + y ** 2 + " ";
}
console.log(out2);

// let output = "";
// for (let x = 1; x <= 50; x+=2){
//         square = x**2;
//         output += square + "  ";
// }
// console.log(output);


