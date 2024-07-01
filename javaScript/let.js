// Ein paar Variablen anlegen
let x = 5;
let vorname = "Matthias";

console.log("x = ", x);
console.log("name =", vorname);
// Bereiche, in denen Variablen gültig sind
// "Blöcke", z.B. bei Funktionen, Schleifen, Bedingungen, 
// "Klassen"
// abgetrennte Bereiche, in denen Variablen gültig sind
// einen neuen Bereich erzeugen
{
    let local = "Hallo";
    console.log("Local: ", local);
}

// Gültigeit von local ist auf den abgetrennten Bereich 
// beschränkt.
// Fehler tritt erst hier auf, Zeilen vorher werden ausgeführt.
// => Interpretierte Sprache
// console.log(local)
