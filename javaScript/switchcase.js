// switch case (Weiche)
let tag = new Date().getDay(); // aktueller Tag als Zahl (Index)
new Date().getTime();
new Date().getMinutes();

// Welchen Wert hat tag zu diesem Zeitpunkt?
switch(tag) {
    // Verschiedene Fälle definieren und darauf reagieren
    // KEINE Bereiche, sondern nur einzelne Werte
    case 0: 
        console.log("Sonntag");
        break;
    case 3: 
        console.log("Mittwoch");
        break;
    case 6: 
        console.log("Samstag");
        break;
    default:
        console.log("Alle Wochentage");
}

// Überführung in if else:
let tag1 = 1;
if (tag1 == 1) {
    console.log("Sonntag");
} else if (tag1 == 4) {
    console.log("Mittwoch");
} else if (tag1 == 6) {
    console.log("Samstag");
} else {
    console.log("Alle andere Wochentage");
}

// Bereiche überprüfen
let check = 10;
switch(true) {
    case (check > 10):
        console.log("> 10");
        break;
    case (check > 0 && check < 11):
        console.log("< 11");
        break;
    default:
        console.log("Alle anderen Werte");
}




