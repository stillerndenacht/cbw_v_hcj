// implizite Typumwandlung (vom System OHNE Funktion umgewandelt)
function sum(x1,x2){
    console.log(x1+x2); // x2 wird in string umgewandelt 
    // evtl. (ohne, dass wir das wollen)
    // "22"
}

function minus(x1,x2){
    console.log(x1-x2); // x2 wird in string umgewandelt 
    // evtl. (ohne, dass wir das wollen)
    // "22"
}

sum(2,2);
// Hier: implizite Umwandlung von number in String
sum("2",2); // "22"

minus(2,2);
// Hier: implizite Umwandlung von String in number
minus("2",2);