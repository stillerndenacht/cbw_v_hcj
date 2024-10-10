package application;

public class Rechteck {
    private double laenge = 0;
    private double breite = 0;
    private String rahmenfarbe = "Schwarz";
    private String fuellfarbe = "Weiß";

    // --- static ist eine Klassenvariable ---
    private static int anzahlRechtecke;
    // ---- statischer also Klassen Initialisierungsblock ---
    static {
        System.out.println("Klasse geladen...");
    }

    // public Rechteck(){} --- das wäre der Standard-Construktor, er ist leer oder wie hier mit default-Werten gefüllt
    public Rechteck() {
        this(10, 10.0, "Grün", "Rot");
    }

    public Rechteck(double laenge, double breite) {
        setLaenge(laenge);
        setBreite(breite);
    }

    public Rechteck(double laenge, double breite, String rahmenfarbe, String fuellfarbe) {
        setLaenge(laenge);
        setBreite(breite);
        this.rahmenfarbe = rahmenfarbe;
        this.fuellfarbe = fuellfarbe;
        ++anzahlRechtecke; // --- hier wird die Klassenvariable hochgezählt
    }

    // für den Zugriff auf die Klassenvariable braucht es eine Klassenmethode
    // sie muss auch in Start mit Klassenname abgefragt werden (geht aber auch mit
    // Objektname)
    // Klassenmethoden können nur auf Klassenvariablen zugreifen!
    public static int getAnzahlRechtecke() {
        return anzahlRechtecke;
    }

    public double getBreite() {
        return this.breite;
    }

    public double getLaenge() {
        return this.laenge;
    }

    public String getRahmenfarbe() {
        return this.rahmenfarbe;
    }

    public String getFuellfarbe() {
        return this.fuellfarbe;
    }

    public void setBreite(double breite) {
        if (breite < 0.0 || breite > 1000) {
            System.out.println("Falscher Wert für die Breite " + breite);
            return;
        }
        this.breite = breite;
    }

    public void setLaenge(double leange) {
        if (leange < 0.0 || leange > 1000) {
            System.out.println("Falscher Wert für die Länge " + leange);
            return;
        }
        this.laenge = leange;
    }

    public void setRahmenfarbe(String rahmenfarbe) {
        this.rahmenfarbe = rahmenfarbe;
    }

    public void setFuellfarbe(String fuellfarbe) {
        this.fuellfarbe = fuellfarbe;
    }

    public void print() {
        System.out.printf("Länge: %12.2f%nBreite: %12.2f%nRahmenfarbe: %12s%nFuellfarbe: %12s%n", laenge, breite,
                rahmenfarbe, fuellfarbe);
    }
// eine automatische Methode die wieder runterzählt, wenn Objekte entfernt werden
    protected void finalize() {
        --anzahlRechtecke;
    }
}
