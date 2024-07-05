let text;
// Ist die Variabe nicht initialisiert oder null?
let ausgabe = text ?? "Hallo Mars";
console.log(ausgabe);

if (text == null) {
    text = "Hallo Mars"; 
}
console.log(text);
