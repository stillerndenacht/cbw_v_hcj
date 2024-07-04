//function funktionsname (parameter1, parameter2){variable = was soll mit den parametern gemacht werden; return variable}
function fname(x, y) {
  let z = x + y;
  return z;
// return x-y; ... geht auch ohne z....
}
// Aufruf der function innerhalb eines console.log die Werte für x, y werden gegeben
console.log(fname(1, 2));
//Funktionen funktionieren aber auch ohne Parameter anzugeben function fname(){Anweisung}
//....... geeter function .......
console.log("...Greeter 1 ...........");
function greeter(greet, datehour) {
  console.log("Hello ", greet, "it is ", datehour, "'o clock");
  if (datehour < 7) {
    console.log("don't want to wake you up....");
  } else if (datehour >= 7 && datehour < 12) {
    console.log("good morning");
  } else if (datehour >= 12) {
    console.log("this day is lost...");
  } else {
    console.log("what?");
  }
}
const date = new Date();
let hour = date.getHours();
console.log(hour);
greeter("Verlain", hour);

// greeter 2. Versuch mit einer greeting-Variable
console.log("\v..........greeter2..........");
function greeter2(greet2, datehour2) {
  let greeting = "";
  if (datehour2 < 7) {
    greeting = "don't want to wake you up....";
  } else if (datehour2 >= 7 && datehour2 < 12) {
    greeting = "good morning";
  } else if (datehour2 >= 12) {
    greeting = "this day is lost...";
  } else {
    greeting = "what?";
  }
  console.log(
    "Hello ",
    greet2,
    "it is ",
    datehour2,
    "'o clock",
    "\v\t",
    greeting
  );
}
// const date2 = new Date();
// let hour2 = date2.getHours(); das geht kürzer..
const hour2 = new Date().getHours();
console.log(hour2);
greeter2("Verlain", hour2);
