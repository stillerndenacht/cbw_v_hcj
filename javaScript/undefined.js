// Eine Variable deklarieren, ohne einen Wert zuzuweisen
// Deklaration: "Bekanntmachung", aber kein konkreter Wert
let spiel;
// In JavaScript wird der Datentyp aus dem Wert der Variablen
// hergeleitet. 
// weil kein Wert drinsteht, ist die Ausgabe nun undefined
console.log(spiel);
console.log(typeof spiel); // == "undefined"


vorname = "Matthias";
vorname = null; // einen Verweis ins "Leere" setzen
console.log(vorname);
vorname = undefined;
console.log(vorname);
