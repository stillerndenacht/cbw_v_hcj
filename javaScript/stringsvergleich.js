// Bei Stringvergleichen gilt folgendes:
// Code point
// "a" => 97
// "A" => 65
// Code point und Wortlänge, die eine Rolle spielt beim Vergleich
// true, weil Wort kürzer, erste 4 Zeichen identisch
console.log("java" < "javascript");
// true, weil J vor j im Code point kommt
console.log("Java" < "javascript");
// true code Point von Z vor kleinem j
console.log("Zava" < "javascript");
// false, da code Point von z hinter j
console.log("zava" < "javascript");

console.log("javA" < "javascript");
console.log("java" < "javascriPt");
console.log("javascript" < "javascriPt");