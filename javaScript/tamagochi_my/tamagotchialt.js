var Marko = document.getElementById('erste')
function drucken() {   
    Marko.innerHTML = `\u{1F642}` // normale gesicht
}

function drucken2() {    
    Marko.innerHTML = `\u{1F911}` // Geld zunge gesicht
}

function drucken3() {    
    Marko.innerHTML = `\u{1FAE3}` // Geld zunge gesicht
}

function apfel() {
    var Marko2 = document.getElementById('apfel')
    Marko2.innerHTML = `\u{1F34E}` // apfel
}
var Marko = document.getElementById('obstgemuese')
function paprika() {
    
    Marko2.innerHTML = `\u{1F336}` // paprika
}
function aubergine() {
    var Marko = document.getElementById('aubergine')
    Marko2.innerHTML = `\u{1F346}` // aubergine
}
function croissant() {
    var Marko = document.getElementById('croissant')
    Marko2.innerHTML = `\u{1F950}` // croissant
}
var x;
function feed(x){
    food = x.getAttributeNode("id").value;
    console.log(food);
    eat(food);
}
let wf;
let foodcode = `\u{1F34E}`;
function eat(){
    wf = getElementById('whenfeed');
    wf.innerHTML = ${foodcode};
}

/*

apfel : U+1F34E
aubergine: U+1F346
paprika: U+1F336
croissant: U+1F950

*/

