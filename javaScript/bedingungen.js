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
if(alter < 40 ) {
    console.log("Jungspund");
} else {
    console.log("Alter Knacker");
}

// Mehrfachverzweiung mit Alternativfall
// Sind alle Fälle abgedeckt?
// Bei überlagernden Fällen wird der Ausdruck ausgewertet, der ZUERST
// zutrifft und anschließend wird aus dem gesamten Block gesprungen
// else if => Ausschlusslogik 
// Was ist, wenn ich das Alter differenzierter auswerten möchte?
debugger
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
