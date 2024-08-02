const hotellist = ["Riu Palace", "Iberostar", "Hilton", "the niu"];
const hotellist2 = [
  "Adlon",
  "Bates Motel",
  "Million Dollar Hotel",
  "one1 Hotel",
];
// Modularisierung: Was ist die Aufgabe der Funktion?
// Was brauchen wir für Eingaben?
function createHTMLListFromList(listType, list) {
  if (listType == "ul") {
    // das div in das JavaScript holen, um es zu bearbeiten
    let list_forin = document.getElementById("div_to_fill");

    // Eine ul erzeugen
    let hotel_list_type = document.createElement("ul");

    let hotel_item;

    for (let i in list) {
      // li erzeugen
      hotel_item = document.createElement("li");
      // Index : Hotelname
      hotel_item.textContent = `${i} : ${list[i]}`;
      // li der ul hinzufügen
      hotel_list_type.appendChild(hotel_item);
    }

    list_forin.appendChild(hotel_list_type);
  }
}
createHTMLListFromList("ul", hotellist);
createHTMLListFromList("ul", hotellist2);

function createSomething(what, withwhat) {
  let where_in = document.getElementById("div_to_fill");
  let what_type;
  if (what == "ul") {
    what_type = document.createElement("ul");
  }
  where_in.appendChild();
}
