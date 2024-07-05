// Wiederholung von Anweisungen: Schleifen

// Erzeugt Redundanz
console.log(1*1);
console.log(1*2);
console.log(1*3);
console.log(1*4);
console.log(1*5);
console.log(1*6);

// Wie geht das kürzer?
// for-loops sind sog. Zählscheifen.
// Wir wiederholen mit der for-Schleife Anweisungen eine fixe Anzahl oft.
// Initialisierung einer sog. Laufvariable
// Fortsetzungsbedingung: Wenn die Bedingung TRUE ist, wird der
// Durchlauf fortgeführt. Zum Verlassen wird diese false. 
// Wie verändert sich die Laufvariable, damit man irgendwann
// das Ende erreicht? 
for(let i = 1; i <= 6; i++) {
    console.log(1*i);
}

// Quadratzahlen ausgeben:
// Iteration: Schleifendurchlauf
for (let i = 1; i <= 10; i++) {
    console.log( i * i);
}

for (let i = 1;; i++) {
    // Die erste Anweisung NACH einem if bzw. einem Schleifenkopf 
    // muss NICHT explizit eingeklammert werden.
    // Alle nachfolgenden Anweisungen gehören dann nicht mehr zu der Bedingung.
/*    if (i > 10) {
        break;
    } */
    // Abbruch mit break; möglich
    if (i > 10) break; 
    console.log( i * i);
}


for (let i = 1; i < 10; i++) {
    console.log( i * i);
} 

// Mit continue beende ich den aktuellen Schleifendurchlauf
// und fahre mit dem nächsten fort.
for (let i = 1; i < 10; i++) {
    if (i === 5) {
        continue;
    }
    console.log( i * i);
}


// Einmaleins ausgeben
// 1 2 3 4 5 6 7 8 9 10
// 2 4 6 8 10 12 14 16 18 20
// 3 6 9 12 15 18 21 24 27 30
// ...
// 10 20 30 40 50 60 70 80 90 100

// Hinweis:
// 1 Schleife geht über die Zeilen
for(;;) {
    // Spalten
    for(;;) {
        
    }
}


for(let q=1; q<=10; q++) {
    // console.log("das Quadrat von ", q, " ist: ", q**2);
    console.log(`${q**2}`);
}

// i += 2 wird zu i = i + 2
for (let i = 1; i <= 50; i+=2) {
    console.log(i**2)
}

// in einer Zeile ausgeben
let output = ""; // String-Literal, leer
for (let x = 1; x <= 50; x+=2){
        square = x**2; // number
        // implizite Typkonvertierung
        output += square + "  ";  // output = output + square + " ";
}
console.log(output);