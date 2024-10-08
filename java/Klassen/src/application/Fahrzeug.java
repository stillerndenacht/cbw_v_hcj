package application;

import static java.lang.Math.abs;

public class Fahrzeug {
    private String hersteller = "None";
    private int ps = 0;
    private String farbe = "None";
    private int anzahlSitze = 0;

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

    public void print(){
        System.out.printf("Hersteller : %20s%nPS : %20d%nFarbe : %20s%nAnzahl Sitze : %20d%n", this.hersteller, this.ps, this.farbe, this.anzahlSitze);
    }

}
