function greeter(greet) {
    // Code, den ich wiederverwenden will, implementieren
    console.log("Hallo, " + greet);
    console.log("~~(,,_,,°°> ==============");
}

// wie verwende ich das?
// ein einfacher Aufruf
greeter("Veit");


function greeter(greet, tag, monat, jahr, zeit, min) {
    // Code, den ich wiederverwenden will, implementieren
    console.log("Hallo, " + greet);
    console.log(`Heute ist, ${tag}-${monat}-${jahr}; ${zeit}:${min}`);
}
const date = new Date();
greeter("Leute!", date.getDate(), date.getMonth()+1, 
date.getFullYear(), date.getHours(), date.getMinutes());

date.toLocaleDateString('de-DE');


function greeter(greet, mouse) {
    let begruessung;
    hour = new Date().getHours();
    hour = 15; 
 
    if (hour < 12) {
        begruessung = "Guten Morgen";
        mouse = "============== ~~(,,_,,°°>";
    } else if (hour < 18) {
        begruessung = "Guten Tag";
        mouse = "============== <°°,,_,,)~~";
    } else {
        begruessung = "Guten Abend";
        mouse = "~~(,,_,,°°> ==============";
    }
 
    console.log(begruessung + ", " + greet);
    console.log(mouse);
}
 
greeter("Stipo.");
