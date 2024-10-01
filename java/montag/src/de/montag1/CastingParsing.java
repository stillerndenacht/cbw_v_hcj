package de.montag1;

public class CastingParsing {
    public static void main(String[] args) {
        double a = 5 / 2; // Ergebnis 2.0 -> Java macht die Berechnung nach dem Datentyp der Operanden
        System.out.println(a); 
        double aa = 5.0 / 2; // Ergebnis 2.5 -> deswegen muss man den Datentyp passend wählen
        System.out.println(aa); 

        int a3 = 5;
        int b3 = 2;
        double c = a3/b3; // Ergebnis 2 -> Datentyp int
        System.out.println(c); 
        double c2 = (double) a3/ b3; // Ergebnis 2.5 man muss auch die Variablen passend casten
        System.out.println(c2); 

        String s = "5";
       // int x = s; das geht so nicht, dafür braucht es eine Methode
       int x = Integer.parseInt(s);
       System.out.println(x);    

    }

}
