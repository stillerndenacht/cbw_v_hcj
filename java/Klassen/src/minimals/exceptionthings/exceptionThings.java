//  um weiter zu laufen, jeweils die Fehler (unhandled Exceptions) werfenden Zeilen auskommentieren
package minimals.exceptionthings;

public class exceptionThings {

    public static void main(String[] args) {
        System.out.println("\n----- Division by zero ------\n");
        int zahl1 = 5, zahl2 = 0, zahl3 = 50, erg = 0;
        try {
            // die erste Rechnung läuft noch durch ..
            erg = zahl3 / zahl1;
            System.out.println(erg);
            // doch dann der Fehler...
            erg = zahl1 / zahl2;
            // das erg wird nicht berechnet, sondern die Fehlerbehandlung angeworfen
            System.out.println(erg);

        } catch (Exception e) {
            System.out.println("oh das war falsch...");
            // Ausgabe der reinen Fehler message bspw.: / by zero
            System.out.println(e.getMessage());
            // (fast) die komplette Meldung incl. Zeilennr. etc.
            e.printStackTrace();
        } finally {
            System.out.println("finally ist immer und überall...");
        }
        System.out.println("Endergebnis egal ob Fehler :" + erg);

        // ---------------------------------------------------------------------------
        System.out.println("\n----- Index out of Bounds ------\n");

        String[] fehler = {"Das", "war", "kein", "Fehler"};
        try {
            System.out.println(fehler[4]);
        } catch (ArrayIndexOutOfBoundsException iooB) {
            System.out.println("Da war wohl der Index falsch..");
            System.out.println(iooB.getMessage());
        }
        // finally muss nicht sein

        // ---------------------------------------------------------------------------
        System.out.println("\n----- Division by zero nochmal spezifischer------\n");
        try {
            erg = zahl3 / zahl2;
        } catch (ArithmeticException e) {
            System.out.println("das kommt nur bei Arithmetic Exceptions vor..  " + e.getMessage());
            System.out.println(e.toString());
        }
        System.out.println("Endergebnis außerhalb try catch :" + erg);

        // ---------------------------------------------------------------------------
        System.out.println("\n----- es geht auch ohne catch nur mit finally------\n");
        try {
            // System.out.println(fehler[4]); // einkommentiert ergibt das eine unhandled Exception, weil kein catch sie abfängt
        } finally {
            System.out.println("---Fehler?? mir doch egal! ");
        }
        System.out.println(
                "aber dann bricht die Ausführung ab und das hier kommt nicht... nur das finally und die unhandled Exception..");

        // ---------------------------------------------------------------------------
        System.out.println("\n----- NullPointerException------\n");

        ExceptObjekt exobjekt = null;
        ExceptObjekt exobjekt2 = new ExceptObjekt();

        try {
            exobjekt.print(); // einkommentiert wirft das den Fehler
            exobjekt2.print();
        } catch (NullPointerException e) {
            System.out.println("Da war wohl kein Objekt");
            System.out.println(e.getMessage());
            e.printStackTrace();
            System.out.println("e.toString() : " + e.toString());
        }
        System.out.println("_____Ende der Datei______");

    }

}
