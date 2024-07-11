
let notex = document.querySelector("#in1");
let ausg = document.querySelector('span');
let note = "";
function notethis(){
    note = notex.value;
    
   
// let note = 0;
let notenwort = "";



switch (note){
    case "1": notenwort = "sehr gut";
    break;
    case "2": notenwort = "gut";
    break;
    case "3": notenwort = "befriedigend";
    break;
    case "4": notenwort = "genügend";
    break;
    case "5": notenwort = "ungenügend";
    break;
    default: notenwort = "keine Note";
}
console.log(notenwort);
// let textaus = ausg.innerHTML;

ausg.innerHTML = notenwort;
}