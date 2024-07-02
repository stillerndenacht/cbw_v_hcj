// Eine Zeichenkette speichern
let vorname = "Matthias";
console.log(vorname);
// Escape-Character, um kennzuzeichnen, dass
// " selbst zum String gehören.
let spitzname = "Matthias, \"Matti\"";
console.log(spitzname);

// Steuerzeichen mit escape-character
let spitzname2 = "Matthias,\t \\ \"Matti\"";
console.log(spitzname2);

let x = 5;

// mit ${x} baue ich den Wert einer Variablen
// in eine Zeichenkette ein:
// Berücksichtigt Zeilenumbrüche und Einrückungen (Whitespaces)
console.log(`
Meine Variable x hat den Wert: ${x}
    `);
