package de.montag1;

public class switching {
    public static void main(String[] args) {
        
        // switch Anweisungen dürfen leer sein, aber wenn nicht muss ein case oder
        // default drin stehen
        switch (1) {
        }

        int zahl = 0;

        switch (zahl) { // erlaubte datentypen: byte, short, string, num, enum
            case 0:
                System.out.println(0);
                break; // ohne break läuft der Switch weiter zum nächsten case
            case 1:
                System.out.println(1);
                break;
            case 2:
                System.out.println(2);
                break;
            default: // der default muss nicht am Ende stehen
                System.out.println("default");
                // der letze case braucht keinen break

        }

        int zahl2 = 5;
        final int x = 10; // final ist eine Konstante und kann nur einmal zugewiesen werden
        switch (zahl2) {
            case 4:
                System.out.println(4);
                break;
            case 5:
                System.out.println(5);
                break;
            case 6:
                System.out.println(6);
                break;
            default: // der default muss nicht am Ende stehen
                System.out.println("default");
                break;
            case x: // das x darf nicht einem der anderen cases entsprechen, also x != 4,5,6
                System.out.println(x);

        }
    }
}
