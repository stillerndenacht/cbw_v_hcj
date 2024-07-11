// diese funktion generiert einen String in p und verlängert ihn onclick auf den Button (siehe Html)
// leere Variable string
var string = "";
// das Element p einer Variable paragr zuweisen
var paragr = document.querySelector("p");
function makestring() {
    // Variable string verlängern
  string += "länger und ";
//   den Wert der Variable string in das p schreiben
  paragr.innerHTML = string;
}

// diese Funktion kürzt den String aus p wieder onclick auf den Button (siehe Html)
function shortenstring() {
   string = paragr.innerHTML;
//überprüfen wie die Variable string aussieht
  console.log(string.length);
  console.log(string);
//   das 0-te bis 5-te Zeichen des Strings in eine Variable stringanfang schreiben
  let stringanfang = string.substring(0, 5);
//   die Variable stringanfang in die console
// man könnte sie auch für irgendwas anderes verwenden
  console.log(stringanfang);

// eine Variable stringnew schreiben, welche den Wert der Variable string ab der 5-ten Stelle bis zum Ende enthält
  let stringnew = string.substring(5, string.length);
//   den gekürzten string aus stringnew wieder in das Html-Element paragr reinschreiben
  paragr.innerHTML = stringnew;
}