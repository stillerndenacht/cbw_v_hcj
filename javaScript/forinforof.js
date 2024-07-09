let laender = ["Frankreich", "Spanien", "Niederlande", "England"];
        //land:    0            1             2             3
// Iteration mit for-in
// for-in geht immer die gesamte Liste durch
for(let land in laender) {
    console.log(land, ":", laender[land]);
} 

let i = 0;
// Bei for of ist kein Index vorhanden, sondern nur
// die Werte selbst. 
// for of nur dann, wenn kein Index gebraucht wird.
// land ist hier das jeweilige Land im Klartext
for(let land of laender) {
    console.log(i, ":", land);
    i++;
}

// length Anzahl Elemente in Liste
for(let l = 0; l < laender.length; l++) {
    console.log(l, ":", laender[l]);
}