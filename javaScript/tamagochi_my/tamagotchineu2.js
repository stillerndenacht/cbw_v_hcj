var Marko = document.getElementById("erste");
var gemuese = "neu";

function drucken() {
  Marko.innerHTML = `\u{1F642}`; // smilly gesicht

  const audio = document.querySelector("#audio1");
  audio.play();
}

function drucken1() {
  Marko.innerHTML = `\u{1F973}`; // party gesicht
}

function drucken2() {
  Marko.innerHTML = `\u{1F922}`; // nauseated gesicht
}

function drucken3() {
  Marko.innerHTML = `\u{1F92E}`; // vomiting gesicht
}

function drucken4() {
  Marko.innerHTML = `\u{1F616}`; // zitrone gesicht
}

var Marko2 = document.getElementById("obstgemuese");
var two = document.getElementById("two");

function apfel() {
  Marko2.innerHTML = `\u{1F34E}`; // apfel
  two.style.background = "rgb(255, 141, 81)";
  gemuese = "apfel";
}

function strawberry() {
  Marko2.innerHTML = `\u{1F353}`; // paprika
  two.style.background = "rgb(205, 198, 16)";
  gemuese = "strawberry";
}

function zitrone() {
  Marko2.innerHTML = `\u{1F34B}`; // zitrone
  two.style.background = "rgb(248, 2, 2)";
  gemuese = "zitrone";
}

var x;
var food;
function feed(x) {
  food = x.innerHTML;
  // console.log(food);
  eat(food);
}
let wf = document.getElementById("whenfeed");
let foo = "";
function eat(fo) {
  foo = foo + fo;
  wf.innerHTML = foo;
  // console.log(foo.length);
  // console.log(foo);
}

function changegemuese() {
  if (gemuese == "neu") {
    strawberry();
    // console.log(gemuese);
  } else if (gemuese == "strawberry") {
    zitrone();
    // console.log(gemuese);
  } else if (gemuese == "zitrone") {
    apfel();
    // console.log(gemuese);
  } else if (gemuese == "apfel") {
    strawberry();
    // console.log(gemuese);
  }
}

var stringgemuese = "";
var eatcount = 0;
function essen() {
  stringgemuese = wf.innerHTML;
  let gemueseessen = stringgemuese.substring(0, 2);
  let stringnew = stringgemuese.substring(2, stringgemuese.length);
  wf.innerHTML = stringnew;
  // console.log(gemueseessen);
  if (gemueseessen == "\u{1F34B}") {
    drucken4(); //Zitronengesicht
    // console.log("jetzt");
  }

  eatcount = eatcount + 1;
  if (eatcount >= 2 && eatcount < 10) {
    drucken1();
  } else if (eatcount > 10 && eatcount < 15) {
    drucken2();
  } else if (eatcount > 15) {
    drucken3();
  }

  const audio = document.querySelector("audio#audio2");
  audio.play();
}

/*

apfel : U+1F34E
aubergine: U+1F346
paprika: U+1F336
croissant: U+1F950
lime: U+1F34B
limetten gesicht: U+1F616

party face : U+1F973
nauseated face: U+1F922
face vomiting: U+1F92E

*/
