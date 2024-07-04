//While Variablendefinition , while(abbruchbedingung){Anweisung evtl. mit Itterator}
let i = 0;
let out = "";
while (i < 5) {
  out = out + i ** 2 + " ";
  i++;
}
console.log(out);

//Zufallszahlen generieren bis eine unter Grenzwert kommt
console.log ("Zufallszahlen")
let zufall = 1;
let grenzwert = 0.3;
while(zufall > grenzwert){
    zufall = Math.random();
    console.log(zufall);
}
