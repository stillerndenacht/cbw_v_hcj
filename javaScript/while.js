let i = 0;
while(i < 3) {
    console.log(i);
    i++;
}

let zufall = 1;
let schranke = 0.2;
// In dem Experiment ziehen wir eine Zufallszahl und möchten das solange machen, bis
// eine Zahl <=> schranke vorkommt. 
while(zufall > schranke) {
    // Jedesmal, wenn Math.random() aufgerufen wird, würfeln wir.
    zufall = Math.random();
    console.log(zufall);
    // Intervall zwischen [0 und 1), 1 exklsuive] 0.99999999
}

// while(true)
// break und continue funktionieren mit while-Schleifen
// genauso wie mit for-Schleifen.
