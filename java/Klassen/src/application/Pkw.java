package application;

public class Pkw extends Fahrzeug {
    // private String className = "PKW";

    public Pkw() {
        this("VW", 40, "Silbergrau", 5);
        setClassName("Pkw");
    }

    public Pkw(String hersteller, int ps, String farbe, int anzahlSitze) {
        super(hersteller, ps, farbe, anzahlSitze);
        setClassName("Pkw");

    }

    // public String getClassName() {
    // return className;
    // }

    // public void setClassName(String className) {
    // this.className = className;
    // }
}
