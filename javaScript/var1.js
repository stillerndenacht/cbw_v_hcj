// Ein paar Variablen anlegen
let x = 5;
let name = "Matthias";

// Bereiche, in denen Variablen gültig sind
// "Blöcke", z.B. bei Funktionen, Schleifen, Bedingungen,
// "Klassen"
// abgetrennte Bereiche, in denen Variablen gültig sind
// einen neuen Bereich erzeugen
{
  let local = "Hallo";
  console.log("Local: ", local);
  var global = "Ich kann auch raus";
  // automatisch eine globale Variable
  d = 8;
}

// globale Variable, kann überall genutzt werden.
console.log(global);
console.log(d);

// Gültigeit von local ist auf den abgetrennten Bereich
// beschränkt.
// Fehler tritt erst hier auf, Zeilen vorher werden ausgeführt.
// => Interpretierte Sprache
// console.log(local);

// Wir sind nicht an einen Datentypem gebunden und können
// eine Variable beliebig anderen Werten zuweisen.
let chamaeleon = "Chamäleon";
console.log(chamaeleon);
// Neuzuweisung über Datentypen hinweg.
// Achtung: Fehlerquelle !
chamaeleon = 15;
console.log(chamaeleon);
