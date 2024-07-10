var Marko = document.getElementById("erste");
var gemuese = "neu";
function drucken() {
  Marko.innerHTML = `\u{1F616}`; // zitrone gesicht
  // console.log(gemuese);
}

function drucken1() {
  Marko.innerHTML = `\u{1F911}`; // Geld zunge gesicht
}

function drucken2() {
  Marko.innerHTML = `\u{1F642}`; // normale gesicht
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
  drucken();
}
var x;
var food;
function feed(x) {
  food = x.innerHTML;
  console.log(food);
  eat(food);
}
let wf = document.getElementById("whenfeed");
let foo = "";
function eat(fo) {
  //  console.log(fo);
  foo = foo + fo;
  wf.innerHTML = foo;
  console.log(foo.length);
  console.log(foo);
  if (foo.length > 4){
    drucken1();
  }
}

function changegemuese() {
  if (gemuese == 'neu') {
    strawberry();
    console.log(gemuese);
  }
  else if (gemuese == 'strawberry'){
    zitrone();
    console.log(gemuese);
  }
  else if (gemuese == 'zitrone'){
    apfel();
    console.log(gemuese);
  }
  else if (gemuese == 'apfel'){
    strawberry();
    console.log(gemuese);
  }
//   console.log(gemuese);

  // var change =
}

/*

apfel : U+1F34E
aubergine: U+1F346
paprika: U+1F336
croissant: U+1F950
lime: U+1F34B
limetten gesicht: U+1F616

*/
