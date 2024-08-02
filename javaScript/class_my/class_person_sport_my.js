// alles nur in der Konsole ausführbar über den Aufruf: node class_person_sport_my.js  aus dem entsprechenden Dateiordner heraus

class Person {
  //der constructor (parameter = defaultwert, ...){dieses damit generierte Objekt.dessen Parameter = Param-Wert}
  // geht auch ohne defaultwerte!
  constructor(fname = "nobody", alter = 0) {
    this.fname = fname;
    this.alter = alter;
  }
  // eine Methode (parameter){für diese Objekt = der neue Wert, wie mit Aufruf der Funktion übergeben}
  changeName(namechange) {
    this.fname = namechange;
    console.log("Hi my name is : ", this.fname);
  }
  changeAlter(alterchange) {
    this.alter = alterchange;
    console.log("I'am", this.alter, " years old ");
  }
}
// Erstellung eines new Objektes aus der class() mit Übergabe der Werte für die Parameter
let p1 = new Person("Vivaldi", 28);
// Abfrage des ganzen Objekts
console.log(p1);
// Abfrage einzelner Parameter des Objekts
console.log(p1.fname);
// Anwendung einer Methode auf ein Objekt (console.log ist in der Methode eingebaut)
p1.changeName("Brahms");

// eine von Person erbende class Athlete
class Athlete extends Person {
  // constructor ist um neue Parameter erweitert
  constructor(fname = "nobody", alter = 0, sport = "Couching") {
    // super() integriert die constructor Anweisungen aus der "Parent"class
    super(fname, alter);
    this.sport = sport;
  }
  changeSport(sport) {
    this.sport = sport;
    console.log("my sport now is: " + this.sport);
  }
}
let a1 = new Athlete();
console.log(a1);
a1.changeName("Bach");
a1.changeAlter(200);
a1.changeSport("exessive Organ-Playing");
