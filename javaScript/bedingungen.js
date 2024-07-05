let alter = 68;

// Einfache Verzweigung
// Wenn jünger als 40, wird man ein Jungsound (Ausgabe)
// true ist intern als number eine 1, false eine 0
// if(alter < true) 

// number mit number
// einfache Verzweigung
if(alter < 40 ) {
    console.log("Jungspund");
}

// einfache Verzweigung mit Alternativfall
// Wir garantieren 100% Fallabdeckung
if(alter < 40 ) {
    console.log("Jungspund");
} else {
    console.log("Alter Knacker");
}

// Mehrfachverzweiung mit Alternativfall
// Sind alle Fälle abgedeckt?
// Spezifikations-Lücken? 
// Bei überlagernden Fällen wird der Ausdruck ausgewertet, der ZUERST
// zutrifft und anschließend wird aus dem gesamten Block gesprungen
// else if => Ausschlusslogik 
// Was ist, wenn ich das Alter differenzierter auswerten möchte?
// debugger
if(alter < 18 ) {
    console.log("Kind");
} 
// verschiedene Alternativfälle definieren
// Zwischen 18 und 30
// 19-29, mit <= 18-30
else if(alter >= 18 && alter <= 30) {
// else if (18 <= alter <= 30) {
    console.log("Junger Erwachsener");
}
// Wie schreibt man die 18 <= alter <= 30 als logischen Ausdruck?
// alter >= 18 && alter <= 30
else if (alter > 30 && alter < 70) {
    console.log("Arbeiter, jeden Tag");
} 
// 66,67,68,69 
else if (alter > 65 && alter < 75) {
    console.log("Frührentner");
} 
else {
    console.log("Rentner");
}

// 18 <= alter <= 30
// 18 <= 40 => true
// true (intern 1)
// also: 1 <= 30 => true


// Mehrfachverzweiung mit Alternativfall
// Sind alle Fälle abgedeckt?
// Spezifikations-Lücken? 
// Bei überlagernden Fällen wird der Ausdruck ausgewertet, der ZUERST
// zutrifft und anschließend wird aus dem gesamten Block gesprungen
// else if => Ausschlusslogik 
// Was ist, wenn ich das Alter differenzierter auswerten möchte?
// debugger
if(alter < 18 ) {
    console.log("Kind");
} 
// verschiedene Alternativfälle definieren
// Zwischen 18 und 30
// 19-29, mit <= 18-30
else if(alter >= 18 && alter <= 30) {
// else if (18 <= alter <= 30) {
    console.log("Junger Erwachsener");
}
// Wie schreibt man die 18 <= alter <= 30 als logischen Ausdruck?
// alter >= 18 && alter <= 30
else if (alter > 30 && alter < 70) {
    /* if (alter > 65 && alter < 75) {
        console.log("Frührentner");
    } */
    console.log("Arbeiter, jeden Tag");
} else {
    console.log("Rentner");
}

// 66,67,68,69 
if (alter > 65 && alter < 75) {
    console.log("Frührentner");
} 

// Ternäre Operator:
// Kurzform von if else
let x = 10;
let ausgabe = x > 10 ? "größer 10" : "kleiner gleich 10";
console.log(ausgabe);

let zustand = "";
if (alter > 30 && alter < 70) {
    zustand = "Arbeiter, jeden Tag";
} else {
    zustand = "Rentner";
}


// ternärer Operator:
let alter2 = 68;
let zustand2 = alter2 > 30 && alter2 < 70 ? "Arbeiter, jeden Tag" : "Rentner";
console.log(zustand2);

let alter3 = 75;
let zustand3 = alter3 > 30 && alter3 < 70 ? "Arbeiter, jeden Tag" 
    : alter3 > 69 ? "Opa" : "Junger Mensch"; ;
console.log(zustand3);


// switch case (Weiche)
let tag = new Date().getDay(); // aktueller Tag als Zahl (Index)
datum = new Date();
console.log(datum.getDay() + "." + datum.getMonth() + "." + datum.getFullYear());

// Wie kann ich das Datum auf der Konsole komolett anzeigen?
// "DD-MM-YYYY"

// Welchen Wert hat tag zu diesem Zeitpunkt?
switch(tag) {
    // Verschiedene Fälle definieren und darauf reagieren
    // KEINE Bereiche, sondern nur einzelne Werte
    case 0: 
        console.log("Sonntag");
        break;
    case 6: 
        console.log("Samstag");
        break;
    default:
        console.log("Alle Wochentage");
}