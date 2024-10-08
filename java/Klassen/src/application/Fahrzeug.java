package application;

import static java.lang.Math.abs;

public class Fahrzeug {

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
        System.out.printf("Hersteller : %20s%nPS : %20d%nFarbe : %20s%nAnzahl Sitze : %20d%n", this.hersteller, this.ps, this.farbe, this.anzahlSitze);
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

}
