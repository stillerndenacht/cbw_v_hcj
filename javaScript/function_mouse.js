"use strict";

function greeter(greet, mouse) {
    // <°,_,)~
    console.log(greet);
    // Welchen Wert hat mouse? 
    console.log(mouse);

    let begruessung;
    let hour = new Date().getHours();
    hour = 15; 
 
    if (hour < 12) {
        begruessung = "Guten Morgen";
        // mouse = "============== ~~(,,_,,°°>";
    } else if (hour < 18) {
        begruessung = "Guten Tag";
        // mouse = "============== <°°,,_,,)~~";
    } else {
        begruessung = "Guten Abend";
        // mouse = "~~(,,_,,°°> ==============";
    }
 
    console.log(begruessung + ", " + greet);
    console.log(mouse);
}
 
// In der Logik von Funktionen gibt es große Unterschiede 
// zwischen den Programmiersprachen.

// wenn wir Parameter an die Funktion übergeben,
// können wir Parameter auslassen (in anderen Sprachen nicht zulässig)
// Diese werden dann auf undefined gesetzt. 
greeter("Stipo.");

// Java, Python würden nur diesen Aufruf akzeptieren. 
greeter("Stipo.", "<°,_,)~");

// Überschüsseige Argumente werden ignoriert.
greeter("Stipo.", "<°,_,)~", 7, 8, "Hallo");

// Aufgabe: Lagert die Quadratzahlenberechnung in eine Funktion aus.
// Diese Funktion soll als Parameter erhalten, wie viele Quadratzahlen 
// ausgegeben werden sollen.
