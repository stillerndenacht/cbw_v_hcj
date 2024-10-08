package application;

public class Rechteck {
    private double laenge = 0;
    private double breite = 0;
    private String rahmenfarbe = "Schwarz";
    private String fuellfarbe = "Weiß";

    // public Rechteck(){} --- das wäre der default-Construktor, er ist leer
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

}
