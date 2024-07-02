//Zahl-Operationen
let A = 1;
let a = 1;
let b = "1";
var B = 1;
console.log("\vZahl-Operationen")
console.log("Variablen", "\nlet A = 1 ", "\nvar B = 1", "\nlet b =\"1\"")
console.log("A == B ", A == B);
console.log("A === B ", A === B);
console.log("A == b ", A == b);
console.log("A === b ", A === b);
console.log("A != B ", A != B);
console.log("A !== B ", A !== B);
console.log("A != b ", A != b);
console.log("A !== b ", A !== b);

//String-Operationen
let Du = "Du";
let DU = "DU";
let Ich = "Ich";
console.log("\vString-Operationen")
console.log("Variablen", "\nlet Du = Du ", "\nlet DU = DU", "\nlet Ich = Ich")
console.log("Du == DU ", Du == DU);
console.log("Du === DU ", Du === DU);
console.log("Du != DU ", Du != DU);
console.log("Du !== DU ", Du !== DU);
console.log("Du == Ich ", Du == Ich);
console.log("Du === Ich ", Du === Ich);
console.log("Du != Ich ", Du != Ich);
console.log("Du !== Ich ", Du !== Ich);
console.log("Du < DU ", Du  <  DU);
console.log("Du > DU ", Du  >  DU);
console.log("Du <= DU ", Du <= DU);
console.log("D >= DU ", Du >= DU);
console.log("Du < Ich ", Du  <  Ich);
console.log("Du > Ich ", Du  >  Ich);
console.log("Du <= Ich ", Du <= Ich);
console.log("Du >= Ich ", Du >= Ich);

//Logische Operatoren
// Logische Operatoren
// &&, ||, !
// Literale true, false
// && VER-UND-UNG
// BEIDE Ausdrücke müssen true sein
//....die Beispiele sind noch nicht so sinnvoll...
console.log("\vLogische Operatoren")
console.log("true && true : ",true && true) // true
console.log("true && false : ",true && false) // false
console.log("false && true : ",false && true) // false
console.log("false && false : ",false && false) // false
 
// || VER-ODER-N
// Mindestens einer der beiden Ausdrücke MUSS true ergeben,
// damit insgesamt true herauskommt.
console.log("true || true : ",true || true) // true
console.log("true || false : ",true || false) // true
console.log("false || true : ",false || true) // true
console.log("false || false : ",false || false) // false

let x = true;
let y = true;
let z = true;
console.log("Ausschließlich wenn eines true ist, darf alles true werden.")
//normales oder - mindestens eines muss true sein um Ausgabe true zu bekommen
console.log(x || y || z);
//ausschließliches oder - nur eines darf true sein, um Ausgabe 1 zu bekommen
console.log(x ^ y ^ z);