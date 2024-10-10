package application;

import static java.lang.Math.abs;

public class Fahrzeug {

    private String className = "Fahrzeug";
    private String hersteller = "None";
    private int ps = 0;
    private String farbe = "None";
    private int anzahlSitze = 0;
    // neue Attribute ----------
    private double verbrauch100 = 0.0;
    private double maxTank = 0.0;
    private double aktTank = 0.0;
    private double kmTag = 0.0;
    private double kmGesamt = 0.0;
// der Standard Construktor ist nötig damit die Vererbung nach unten richtig funktioniert, wenn man dort keine Construktoren einbaut
    public Fahrzeug() {
        this("Ford", 20, "Black", 4);
    }

    public Fahrzeug(String hersteller, int ps, String farbe, int anzahlSitze) {

        this.hersteller = hersteller;
        this.ps = ps;
        this.farbe = farbe;
        this.anzahlSitze = anzahlSitze;
    }

    public String getHersteller() {
        return this.hersteller;
    }

    public String getFarbe() {
        return this.farbe;
    }

    public int getPs() {
        return this.ps;
    }

    public int getAnzahlSitze() {
        return this.anzahlSitze;
    }

    public void setHersteller(String hersteller) {
        this.hersteller = hersteller;
    }

    public void setFarbe(String farbe) {
        if (!"black".equals(farbe.toLowerCase())) {
            System.out.printf("Falsche Farbe: %s\n --- Sie können jede Farbe wählen, solange sie SCHWARZ ist!! ---",
                    farbe);
            farbe = "Black";
        }
        this.farbe = farbe;
    }

    public void setPs(int ps) {
        if (ps < 0) {
            System.out.println("Das ist zu wenig....");
        }
        this.ps = abs(ps);
    }

    public void setAnzahlSitze(int anzahlSitze) {
        if (anzahlSitze < 1) {
            System.out.println("Das ist zu wenig....\nWir setzen auf 1");
            anzahlSitze = 1;
        }
        this.anzahlSitze = anzahlSitze;
    }

    public void print() {
        // System.out.printf("%nKlasse: %20s%nHersteller : %20s%nPS : %20d%nFarbe :
        // %20s%nAnzahl Sitze : %20d%n",
        // this.className, this.hersteller, this.ps, this.farbe, this.anzahlSitze);
        System.out.printf("%nKlasse :       %20s", this.className);
        System.out.printf("%nHersteller :   %20s", this.hersteller);
        System.out.printf("%nFarbe :        %20s", this.farbe);
        System.out.printf("%nAnzahl Sitze : %20d", this.anzahlSitze);
    }

    // neue Methoden ----------
    public double getVerbrauch100() {
        return this.verbrauch100;
    }

    public void setVerbrauch100(double verbrauch100) {
        this.verbrauch100 = verbrauch100;
    }

    public double getMaxTank() {
        return this.maxTank;
    }

    public void setMaxTank(double maxTank) {
        this.maxTank = maxTank;
    }

    public double getAktTank() {
        return this.aktTank;
    }

    public void setAktTank(double aktTank) {
        this.aktTank = aktTank;
    }

    public double getKmTag() {
        return this.kmTag;
    }

    public void setKmTag(double kmTag) {
        this.kmTag = kmTag;
    }

    public double getKmGesamt() {
        return this.kmGesamt;
    }

    public void setKmGesamt(double kmGesamt) {
        this.kmGesamt = kmGesamt;
    }

    public String getClassName() {
        return className;
    }

    public void setClassName(String className) {
        this.className = className;
    }

    // ----------- Methoden Bewegung etc ----------
    public void fahren(double kmFahrt) {
        double verbrauch = this.verbrauch100 * kmFahrt;
        this.aktTank -= verbrauch;
        double restKm = this.aktTank * this.verbrauch100;
        if (this.aktTank < 0) {
            System.out.printf("Sie mussen mindestens %.2f Liter tanken, um ihr Ziel zu erreichen.", abs(this.aktTank));
        } else {
            System.out.printf("Sie können nach Ankunft mit %.2f Litern im Tank noch %.2f km fahren", this.aktTank,
                    restKm);
        }
    }

    public void setVerbrauswerte(
            double verbrauch100,
            double maxTank,
            double aktTank) {
        setVerbrauch100(verbrauch100);
        setMaxTank(maxTank);
        setAktTank(aktTank);
    }

}
