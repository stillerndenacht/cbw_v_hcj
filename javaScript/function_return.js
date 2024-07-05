// In Java wird eine Rpckgabe garantiert (alle Fälle müssen
// zu Rückgabe führen). 
// In JavaScript: Ich bin nicht verpflichtet, Rückgabewerte zu liefern
// und damit alle Bedingungen abzudecken. 
function mood(tag) {
    switch(tag) {
        case "Montag":
            // return gibt einen wert zurück an die
            // aufrufende Instanz und beendet die Funktion
            return "Die Woche zieht sich wieder lang hin";
            // break überflüsseig
            break;
        case "Dienstag":
            return "Arbeiten...";
            break;
        case "Mittwoch":
            return "Bergfest...";
            break;
        case "Donnerstag":
            return "Bald Wochenede...";
            break;
        case "Freitag":
            return "Party time...";
            break;
    }
}

let str = "";
// Aufruf geht ins Leere
mood("Freitag"); // "Party time kommt zurück, ABER keine
// "weitere Verarbeitung"
str = mood("Montag"); // Hier fangen wir die Rückgabe auf und speichern
// diese in der Variable str
console.log(str); // Variable vom typ string an die Funktion geben.
console.log(mood("Samstag")); 
// Hier löst sich der Ausdruck mood("Samstag")
// direkt in einen String auf "Party time" und wird als Eingabe
// für log direkt weiterverwendet. 
// Es wird also nichts zwischengespeichert.