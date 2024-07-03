// switch case (Weiche)
console.log("\vMotivation Switch-case");
let zeit = new Date().getHours(); // aktueller Zeit als Zahl (Index)
//let zeit = 1;
console.log("\vdie aktuelle Stunde:", zeit);
// Welchen Wert hat tag zu diesem Zeitpunkt?
switch (zeit) {
  // Verschiedene Fälle definieren und darauf reagieren
  // KEINE Bereiche, sondern nur einzelne Werte
  case 0:
    console.log("Moti-what, i'm sleeeeeping");
    break; // springt nach erfolgreichem Case aus der Funktion - sonst würden auch die folgenden Cases geprüft
  case 6:
    console.log("Oh no it's still not Weekend");
    break;
  case 7:
    console.log("I want to ride my bycicle ...");
    break;
  case 8:
    console.log("Let's start");
    break;
  case 10:
    console.log("Time to have a break...");
    break;
  case 11:
    console.log("Still not Lunch-Time..");
    break;
  case 12:
    console.log("Switch off Brain");
    break;
  case 13:
    console.log("Switch on again Brian .... what?");
    break;
  case 15:
    console.log("one Hour left");
    break;
  case 16:
    console.log("I want to ride my bycicle ...");
    break;
  case 23:
    console.log("Ohh it's time ... Good Night");
    break;
  default:
    console.log("What next?");
}
debugger;
console.log("\vHello Switch");
// Switch funktioniert auch mit Strings
// break - springt nach erfolgreichem Case aus der Funktion - sonst würden auch die folgenden Cases geprüft – der Case wäre nur der Startpunkt
// ohne breaks funktioniert default nur am Ende richtig
let x = "string";
let say;
switch (x) {
  // default: say = "What on top?";
  //break;
  case "0":
    say = "Hello i'am Null";
    break;
  case "string":
    say = "Hello i'am a String";
    break;
  case "1":
    say = "Hello i'am One";
    break;
  case "2":
    say = "Hello i'am Two";
    break;
  default:
    say = "What?";
}
console.log(x, say);
