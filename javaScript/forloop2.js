let table = "";
// Zeilen auswerten, welche Zahlenreihe nehmen wir?
for(let i = 1; i <= 10; i++) {
    // Spalten auswerten, Faktoren für die Reihen
    for(let j = 1; j <= 10; j++) {
        table = table + (i*j) + " ";
        }
        table = table + ('\n');
}
console.log(table)