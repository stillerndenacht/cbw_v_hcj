let testeZahl = 17;
let prim = true;
// Widerspruchsbeweis
// Ist die testeZahl prim?
for(let i = 2; i < testeZahl/2; i++) {
    // glatt teilbar?
    if(testeZahl % i == 0) {
        prim = false;
        break;
    }
}
console.log(testeZahl, prim);