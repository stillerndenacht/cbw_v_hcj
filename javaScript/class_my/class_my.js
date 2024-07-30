class Monitor {
  // Wir erzeugen aus der Vorlage Monitor Monitore
  // Hierfür nutzen wir den Konstruktor
  // Wir legen auch hier die Eigenschaften der Klasse fest
  constructor(seriennummer, hersteller, groesse, farbe, preis) {
    this.seriennummer = seriennummer;
    this.hersteller = hersteller;
    this.groesse = groesse;
    this.farbe = farbe;
    this.preis = preis;
    // Standardmäßig bei Generieung für alle Monitore false
    this.isOn = false;
  }

  // "Aktionen" mit dem Objekt
  switchPower() {
    //    (isOn == 0) ? "is on" : "is off";
  }
}
class AdaptiveMonitor extends Monitor {
  constructor(
    seriennummer,
    hersteller = "Default",
    groesse = 23,
    farbe = "schwarz",
    preis = 200,
    stellwinkel = 40,
    helligkeit = 70
  ) {
    // Ruft den Konstruktor der Elternklasse auf
    super(seriennummer, hersteller, groesse, farbe, preis);
    this.stellwinkel = stellwinkel;
    this.helligkeit = helligkeit;
  }

  // Erweiterung um Methoden
  setStellwinkel(grad) {
    this.stellwinkel = grad;
    console.log("der Stellwinkel = " + this.stellwinkel);
  }
  setHelligkeit() {}
}
setStellwinkel(25);
