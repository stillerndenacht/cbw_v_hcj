public class Test {
    public static void main(String[] args) {
        System.out.println("What to say, this works out of itself");
        System.out.println("'This doesn`t'");
        System.out.print("print() macht einen Print ohne Zeilenumbruch");
        System.out.println("  -  Wie man hier sieht");
        System.out.println("Zahlen und Rechnungen gehen natürlich auch: wie die folgende 1 + 1");
        System.out.println(1 + 2);
        // Comments gehen so...
        /*
         * oder als Mehrzeiler ...
         * ... über mehrere Zeilen
         */

         /** und das ist ein javadoc Kommentar, 
          * der über das javadoc-Tool ausgelesen werden kann */
        // Natürlich kann man auch Variablen anlegen
        String first = "erste Variable";
        int second = 2;
        int third;
        System.out.println(first);
        System.out.println(second);
        System.out.println(third = 5);
        System.out.println(second * third);
        second = 5;
        third = 10;
        System.out.println(second * third);
        float water = 3.99f;
        char alpha = 'A';
        boolean bool = true;
        char fakeBeta = 'A';
        int a = 1, b = 2, c = 3; // mehrere Variablen gleichen Typs
        System.out.println(water + alpha); // java addiert den codepoint =) zu 68.99
        System.out.println(alpha + fakeBeta); // auch hier wird addiert
        System.out.println(alpha * fakeBeta); // oder multipliziert
        System.out.println(alpha / fakeBeta); // etc.
        System.out.println(a + b * c);

        float erg = water * b; // rechnen mit verschiedenen Zahlformaten
        int intErg = (int) erg; // narrow Casting -- Cut der Floatstellen
        System.out.println(erg);
        System.out.println(intErg);

        System.out.println("Vergleichsoperator");
        System.out.println(fakeBeta == alpha != bool);

    }

}
