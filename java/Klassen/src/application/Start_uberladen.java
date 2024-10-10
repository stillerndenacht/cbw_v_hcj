package application;

// ---- Uberladen von Methoden
public class Start_uberladen {
    public static void main(String[] args) {
        // die gleich benannte add Methode ist quasi datatype sensitiv und wird je nach
        // argumenttyp korrekt aufgerufen
        int intErgebnis = add(35, 42);
        System.out.println(intErgebnis);

        long longErgebnis = add(35L, 42L);
        System.out.println(longErgebnis);
        // auch die Anzahl der Argumente eignet sich zum Überladen - wobei die letzte
        // Zahl einfach auf long gecastet würde
        long longErgebnis3 = add(35L, 42L, 56);
        System.out.println(longErgebnis3);

    }

    public static int add(int zahl1, int zahl2) {
        return zahl1 + zahl2;
    }

    // nur den Rückgabewert zu ändern ist kein zulässiges Überladen
    // public static long add(int zahl1, int zahl2) {
    // return zahl1 + zahl2;
    // }
    public static long add(long zahl1, long zahl2) {
        return zahl1 + zahl2;
    }

    // gleiche Methode mit mehr Parametern
    public static long add(long zahl1, long zahl2, long zahl3) {
        return zahl1 + zahl2 + zahl3;
    }
}
