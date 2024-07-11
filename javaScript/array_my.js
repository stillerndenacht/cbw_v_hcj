let liste = new Array("ich", "du", "wir", 1);
console.log(liste);
console.log(liste[5]);
liste[5] = "alle";
console.log(liste[5]);
liste[6] = "und noch mehr";
console.log(liste[6]);
console.log(liste[4]);
console.log(liste);
liste [7] = liste [8];
liste[8]= "ich bin 8";

console.log(liste);
let innerliste = new Array(1, 2, 3);
liste[9] = innerliste;
console.log(liste.length);
liste [7] = liste [8];
console.log(liste);
// --------Mehrdimensionale Arrays--------------
console.log("-----------------------------");
const REIHEN = 10;
const PLAETZE = 5;
 
let saalplan = [];
 
// JEDE SITZREIHE EINZELN NACHEINANDER BETRACHTEN
for(let reihe = 0; reihe < REIHEN; reihe++) {
    saalplan[reihe] = []; // Sitze sollen gespeichert werden
    for(let platz = 0; platz < PLAETZE; platz++) {
        // Der Saalplan soll vollständig unbesetzt sein
        saalplan[reihe][platz] = 0;
    }
}
console.log(saalplan);
let Multiliste = [[1, 2],[3, 4]];
Multiliste[1][0] = "neu"; // Wert tauschen
console.log(Multiliste);

// ------------ Methoden -------------
console.log("--------- Methoden----");d
let liste2 = ["Horst", "Barb", "Zora"];
console.log(liste2);
liste2.push("David");
console.log(liste2);
liste2.shift("Horst");
console.log(liste2);