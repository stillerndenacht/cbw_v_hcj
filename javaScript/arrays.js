let gaeste =  ["Matti", "Fernando", "Veit"];
              // 0         1           2
// nicht praktikabel
/* let gast1 = "Matti";
let gast2 = "Fernando"; */

// lesender Zugriff:
// wie komme ich auf Veit?
console.log(gaeste[2]);

// Wie tausche ich Matti in Marko?
// Schreibende Zugriff
gaeste[0] = "Marko";


// mehrere Datentypen in einer Liste

let person = [ "Matti", 41, 200.3, [ 200, 400, 500] ];
console.log(person[1]); // 41
console.log(person[3]); 

// Wir versuchen, auf das 6. Element zuzugreifen
console.log(person[5]); // undefined

person[17] = "Daniel";
console.log(person);

console.log(person.length);
person[17] = undefined;
console.log(person.length);
console.log(person);

// Wir löschen Listenelemte aufgrund dieses Experimentes
// lieber mit den Methode pop(), shift() oder splice()

const liste = ["Matti", "Hans", "Franz"];
// Weiterhin Änderung in den Listenelementen möglich.
liste[1] = "Theodor";
// Neuzuweisungen sind durch const nicht mehr erlaubt
liste = [ 8, 9, 7 ];

