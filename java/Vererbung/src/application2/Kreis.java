package application2;

import java.awt.Color;

public class Kreis extends GrafikObjekt {
    private String r_oder_u = "r";
    private double wert = 1.0;
    private double radius;
    private double umfang;
    private Color fuellfarbe;

    public Kreis(String r_oder_u, double wert, int posX, int posY, Color linienFarbe, Color fuellfarbe) {
        super(posX, posY, linienFarbe);
        setFuellfarbe(fuellfarbe);
        setWert(wert);
        setR_oder_u(r_oder_u);

    }

    public double getRadius() {
        return radius;
    }

    public void setRadius(double radius) {
        this.radius = radius;

    }

    public double getUmfang() {
        return umfang;
    }

    public void setUmfang(double umfang) {
        this.umfang = umfang;

    }

    public Color getFuellfarbe() {
        return fuellfarbe;
    }

    public void setFuellfarbe(Color fuellfarbe) {
        this.fuellfarbe = fuellfarbe;
    }

    public double getWert() {
        return wert;
    }

    public void setWert(double wert) {
        this.wert = wert;
    }

    public String getR_oder_u() {
        return r_oder_u;
    }

    public void setR_oder_u(String r_oder_u) {
        this.r_oder_u = r_oder_u;
        if ("u".equals(this.r_oder_u)) {
            umfang = wert;
            setUmfang(umfang);
            radius = this.umfang / (2 * 3.14);
            setRadius(radius);
        } else {
            radius = wert;
            setRadius(radius);
            umfang = 2 * this.radius * 3.14;
            setUmfang(umfang);
        }
    }

    @Override // @Override initialisiert einen Kontrollmechanismus des Compilers, der prüft ob die Methode der Basisklasse korrekt überschrieben wird
    public void print() {
        super.print();
        System.out.printf("wert : %.2f%n", this.wert);
        System.out.printf("Radius : %.2f%n", this.radius);
        System.out.printf("Umfang : %.2f%n", this.umfang);
        System.out.printf("Fuellfarbe : %s%n", this.fuellfarbe.toString());

    }

}
