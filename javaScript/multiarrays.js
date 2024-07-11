const REIHEN = 20;
const PLAETZE = 50;

let saalplan = [];

// JEDE SITZREIHE EINZELN NACHEINANDER BETRACHTEN
for(let reihe = 0; reihe < REIHEN; reihe++) {
    saalplan[reihe] = []; // Sitze sollen gespeichert werden
    for(let platz = 0; platz < PLAETZE; platz++) {
        // Der Saalplan soll vollständig unbesetzt sein
        saalplan[reihe][platz] = 0;
    }
}

let multiliste = [[1, 2],[3, 4]];
                //   0      1

console.log(multiliste[0]); // [1, 2]
console.log(multiliste[1]); // [3, 4]
console.log(multiliste[0][0]); // 1
console.log(multiliste[0][1]); // 2
console.log(multiliste[1][0]); // 3
console.log(multiliste[1][1]); // 4

let leere_liste = [];
// hier verschachtelte for nehmen
// let leere_multilisteliste = [][];

// FIFO Modell
let warteschlange = ["Matti", "Hans", "Fritz"];
let kunde = warteschlange.shift();
// Mit Kunde etwas tun
console.log(kunde);
console.log(warteschlange);
warteschlange.push("Fernando");
console.log(warteschlange);

// Methode splice()
// Misch-Methode für Einfügen an einer bestimmten Position
// sowie für Löschen
warteschlange.splice(1,0,"Ursula");
console.log(warteschlange);

console.log(warteschlange.slice(1, 3));