// Über JS können wir beliebige CSS Selektoren nehmen
// Hier berechnen wir die Quadratzahlen und geben sie als li aus

// Wir brauchen die ul mit dem Namen squares als Datenstruktur, um
// diese zu erweitern.
// document = HTML-Dokument
// Die id von ul verwenden, um es zu selektieren.
let liste = document.getElementById("squares"); // <ul></ul>
const ANZAHL_QUADRAT = 10;

// Call debugger in the browser
debugger 

for(let i = 1; i <= ANZAHL_QUADRAT; i++) {
    debugger 
    // <li> Element erzeugen (für JEDE Quadratzahl)
    let li = document.createElement("li"); // <li></li>
    let square = i*i; // i**2
    // In das <li> einen Text einfügen
    // <li>Quadratzahl von 3: 9</li>
    li.innerHTML = `Quadratzahl von ${i}: ${square}`;
    // li an die richtige Stelle einbinden
    //<ul>
    // <li>Quadratzahl von 3: 9</li>
    // <li>Quadratzahl von 3: 9</li> <= anfügen mit appendChild()
    // li ist ein Kind von ul
    //</ul>
    liste.appendChild(li);
}
