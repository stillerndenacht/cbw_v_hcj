let x = 6;
// Mit typeof auf Datentyp überprüfen
// Welche Art von Informatuion ist in x gespeichert?
console.log(typeof x);
x = "Fünf";
console.log(typeof x);

// Rechnung funktioniert nur mit number
// Ist x eine Zahl?
if(typeof x == "number") {
    console.log(x-5);
} else {
    console.log("Keine Zahl");
}
