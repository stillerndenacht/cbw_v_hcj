// Casting ist die Umwandlung von einer Variablen eines
// Datentyps in einen anderen.

// Literale (einzelne Werte eines Typs)
// "Eine Zahl", 734437, 879273.22

// Wetter-Daten
// 01.07.2024;11:15;14.2;88.7;
// 01.07.2024;11:16;14.25;88.9;
// 01.07.2024;11:17;14.25;88.9;

// Beim Einlesen der Datei ist z.B. eine ganze Zeile ein String
// "01.07.2024;11:15;14.2;88.7;"
// Durch String-Methoden bekommen wir irgendwann "14.2"
// "14.2" enthält eine Zahl, ist aber eine Zeichenkette
// Um damit zu rechnen, muss man "14.2" => 14.2
// let klima2100 = parseInt("14") + 5;
let klima2100 = parseFloat("14.2") + 5;

console.log(klima2100);

// Umwandlung in eine Zeichenkette durch Addition von ""
let klima2100alsString = klima2100 + "";
console.log(klima2100alsString);

// + für Strings hängt einen anderen String an
// die Zeichenkette an
console.log("String und Zahl: ", "14.2" + 5); // 5 => "5"
console.log("Rechnung: ", 14.2 + 5);
console.log("Rechnung nach Konvertierung: ", parseFloat("14.2") + 5); // "14.2" => 14.2 + 5

// Casting durch den Aufruf eines Konstruktors
// Strings sind Objekte
// String-Erzeugung geht durch Zuweisung
// let str = "Hallo";
// let str_construct = String("Hallo")
// Möglichkeiten für number to string
// explizit
let str3 = String(z);
let z = 5.8;
let str4 = z.toString(); // String-Repräsentation von der number wird zurückgeliefert
// implizit
let str5 = 5.8 + "";
