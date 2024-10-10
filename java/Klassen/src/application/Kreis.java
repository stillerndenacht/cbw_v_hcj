package application;

import java.util.Scanner;

public class Kreis {
    private double radius = 0.0;
    private double umfang = 0.0;
    private String rahmenfarbe = "None";
    private String fuellfarbe = "None";

    // Klassenvariable für den Kreis...
    private static int kreisZaehler;
// Klassenmethode für den Kreis ...
    public static int getKreisZaehler(){
        return kreisZaehler;
    }
    // eine automatische Methode die wieder runterzählt, wenn Objekte entfernt werden, falls der Garbage Collector mal Platz braucht
    protected void finalize() {
        --kreisZaehler;
    }

    public Kreis() {
        this(
                0.0, 0.0, "White", "White");
    }

    public Kreis(double radius) {
        ++kreisZaehler;
        setRadius(radius);

    }

    public Kreis(double radius, double umfang, String rahmenfarbe, String fuellfarbe) {
        ++kreisZaehler;
        setRadius(radius);

    }

    public double getRadius() {
        return this.radius;
    }

    public double getUmfang() {
        return this.umfang;
    }

    public void setRadius(double radius) {
        if (radius < 0.0 || radius > 500) {
            System.out.println("Falscher oder zu großer Radius :" + radius);
            return;
        }

        if (this.umfang != 0) {
            System.out
                    .printf("Es gibt bereits einen Umfang : %.2f , der den Radius festlegt\nDer zugehörige Radius beträgt : %.2f%n",
                            this.umfang, this.radius);
            Scanner scanner = new Scanner(System.in);
            System.out.println("Wollen sie diesen überschreiben? Y/N");
            String scan = scanner.nextLine();
            if ("y".equals(scan.toLowerCase())) {
                System.out.println("Der neue Radius :" + radius);
                scanner.close();
            } else {
                System.out.printf("Der Radius von : %.2f wird nicht geändert.%n", this.radius);
                scanner.close();
                return;
            }

        }

        this.radius = radius;
        this.umfang = 2 * radius * 3.14;
    }

    public void setUmfang(double umfang) {
        if (this.radius != 0.0) {
            System.out
                    .printf("Es gibt bereits einen Radius : %.2f, der den Umfang festlegt\nDer zugehörige Umfang beträgt : %.2f%n",
                            this.radius, this.umfang);
        }
        if (umfang < 0.0 || umfang > 1000 * 3.14) {
            System.out.println("Falscher oder zu großer Durchmesser :" + umfang);
            return;
        }
        // umfang = uk;
        // radius = uk/(2*3.14);
        this.umfang = umfang;
        this.radius = umfang / (2 * 3.14);
    }

    public String getRahmenfarbe() {
        return this.rahmenfarbe;
    }

    public String getFuellfarbe() {
        return this.fuellfarbe;
    }

    public void setRahmenfarbe(String rahmenfarbe) {
        this.rahmenfarbe = rahmenfarbe;
    }

    public void setFuellfarbe(String fuellfarbe) {
        this.fuellfarbe = fuellfarbe;
    }

    public void print() {
        System.out.printf("Radius:      %12.2f%nUmfang:     %12.2f%nRahmenfarbe:    %12s%nFuellfarbe:   %12s%n",
                this.radius,
                this.umfang,
                this.rahmenfarbe, this.fuellfarbe);
                System.out.println("this"+this);
    }
    

}
