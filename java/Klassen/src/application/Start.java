package application;

public class Start {
    public static void main(String[] args) {

        System.out.println("AnzahlRechtecke : " + Rechteckmy.getAnzahlRechtecke());
        Rechteckmy r1;
        r1 = new Rechteckmy();
        r1.setBreite(12);
        r1.setLaenge(56);

        System.out.println("AnzahlRechtecke : " + Rechteckmy.getAnzahlRechtecke());
        System.out.println("AnzahlRechtecke über r1 : " + r1.getAnzahlRechtecke());

        System.out.println(r1.getBreite());
        System.out.println(r1.getLaenge());

        Rechteckmy r2 = new Rechteckmy();
        r2.print();
        System.out.println("AnzahlRechtecke : " + Rechteckmy.getAnzahlRechtecke());

        System.out.println("------Kreis k1-------");
        Kreis k1;
        k1 = new Kreis();
        k1.print();
        k1.setRadius(10);
        // k1.setUmfang(62.8);
        k1.setRadius(12);
        System.out.println(k1.getRadius());
        k1.print();
        System.out.println("Anzahl Kreise : " + Kreis.getKreisZaehler());

        System.out.println("------Kreis k2-------");
        Kreis k2 = new Kreis(15.0);
        k2.print();
        System.out.println(k2);
        System.out.println("Anzahl Kreise : " + Kreis.getKreisZaehler());

        System.out.println("------Kreis k3-------");
        Kreis k3 = new Kreis(25.0);
        k3.print();
        System.out.println(k3);
        System.out.println("Anzahl Kreise : " + Kreis.getKreisZaehler());
       System.out.println("--------Kreiskollaps------------");
       Kreis k4 = new Kreis();
       Kreis k5 = new Kreis();
       Kreis k6 = new Kreis();
       Kreis k7 = new Kreis();
       Kreis k8 = new Kreis();
       System.out.println("Anzahl Kreise : " + Kreis.getKreisZaehler());
       k8 = null;
       System.out.println("Anzahl Kreise : " + Kreis.getKreisZaehler());
       System.out.println("--------Kreiskollaps Ende ------------");
        // ---- Löschen - r1 wird auf Null gesetzt, wodurch das Objekt zwar noch
        // existiert, aber nicht mehr referenziert wird.
        System.out.println("AnzahlRechtecke VOR Löschen: " + Rechteckmy.getAnzahlRechtecke());
        r1 = null;
        // Wirklich gelöscht wird es erst,
        // wenn der Garbage-Collector Platz braucht.
        System.out.println("AnzahlRechtecke NACH Löschen : " + Rechteckmy.getAnzahlRechtecke());
    }
}
