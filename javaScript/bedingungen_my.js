// Sind alle Fälle abgedeckt?
// Was ist, wenn ich das Alter differenzierter auswerten möchte?
let alter = "65";
debugger;
if (alter < 18) {
  console.log("Kind");
}
// verschiedene Alternativfälle definieren
// Zwischen 18 und 30
// 19-29, mit <= 18-30
else if (alter >= 18 && alter <= 30) {
  console.log("Junger Erwachsener");
} else if (alter > 30 && alter <= 65) {
  console.log("Alter Erwachsener");
} else if (alter >= 65 && alter <= 80) {
  console.log("Rente");
} else if (alter > 80) {
  console.log("High Ager");
} else {
  console.log("impossible");
}

//Ternärer Operator
// variable = Bedingung ? true-Ausgabe : false-Ausgabe
let alter2 = 40;
console.log("alter2 :", alter2);
let tern_op =
  alter2 > 30 && alter2 < 70
    ? console.log("Arbeiter, jeden Tag")
    : console.log("Rentner");

let alter3 = 35;
console.log("alter3 :", alter3);
let ternop = alter3 > 30 && alter3 < 70 ? "Arbeiter, jeden Tag" : "Rentner";
console.log(ternop);
