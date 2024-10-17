package minimals;

import minimals.pack.pack1.ZugriffErbe;
import minimals.pack.pack1.packageThings;
// import minimals.pack.pack3.packageThings;  - eine zweite class mit gleichem Namen kann so nicht importiert werden

public class packageThings_Start {
    public static void main(String[] args) {
        // nur pack1 kann über den import angesprochen werden
        packageThings packThings1 = new packageThings();
        packThings1.printPackageThings();
        // Zugriff auf die Klassenmethode ohne Objekt packThings1
        packageThings.main(args);
        // alle anderen Packs müssen über den vollqualifizierten Pfad angesprochen
        // werden
        minimals.pack.pack2.packageThings packThings2 = new minimals.pack.pack2.packageThings();
        packThings2.printPackageThings();
        // Zugriff auf die Klassenmethode ohne das Objekt packThings2
        minimals.pack.pack2.packageThings.main(args);

        minimals.pack.pack3.packageThings packThings3 = new minimals.pack.pack3.packageThings();
        packThings3.printPackageThings();
        // Zugriff über das Objekt ist zwar möglich - aber offenbar nicht korrekt...
        packThings3.main(args);

        // ----------- Zugriffsrechte aus Objekten der (Zugriff)-Class ------

        Zugriff zugriffbeside = new Zugriff();
        // über die Methode ist das erstmal unproblematisch, weil es auf das die
        // Variablen des eigenen Objektes zugreift
        zugriffbeside.zugriffsprint();

        System.out.println(" \n..... Zugriff von außerhalb auf das Objekt ....\n");
        System.out.println("zugriffbeside.defaultZugriff : " +
        zugriffbeside.defaultZugriff);
        // System.out.println("zugriffbeside.privateZugriff : " +
        // zugriffbeside.privateZugriff);
        System.out.println("zugriffbeside.protectedZugriff : " +
        zugriffbeside.protectedZugriff);
        System.out.println("zugriffbeside.publicZugriff : " + zugriffbeside.publicZugriff);

        System.out.println("\n.... Zugriff über Objekt aus UnterUnterPackage-Class ....\n");
        ZugriffErbe zugrifferbend = new ZugriffErbe();
        zugrifferbend.zugriffsprint();
    }
}
