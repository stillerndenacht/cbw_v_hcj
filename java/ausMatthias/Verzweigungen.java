package org.example;

public class Verzweigungen {

    public Verzweigungen() {
    }

    public void ifBeispiele() {
        int z1 = 2, z2 = 2;
        if (!(z1 != z2 || true)) {
            System.out.println(z1 + " ist kleiner als " + z2);
        }

        int x =2;
        char t ='t';
        String wort = "Hallo";
        if (wort.length() < 3) {
            System.out.println("wort ist sehr kurz nur:" + wort.length() + " Zeichen");
        } else if (wort.length() > 15) {
            System.out.println("wort ist sehr Lang ganze:" + wort.length() + " Zeichen");
        } else {
            System.out.println("Das wort ist normal Lang");
        }
    }

    /*
    zahl = 10

    if zahl > 10:
        print("Die Zahl ist größer als 10.")
    elif zahl == 10:
        print("Die Zahl ist genau 10.")
    else:
        print("Die Zahl ist kleiner als 10.")
     */


    public void switchBeispiel() {
        int dayOfWeek = 7;
        switch (dayOfWeek) {
            case 1:
                System.out.println("Montag");
                break;
            case 2:
                System.out.println("Dienstag");
                break;
            case 3:
                System.out.println("Mittwoch");
                break;
            case 4:
                System.out.println("Donnerstag");
                break;
            case 5:
                System.out.println("Freitag");
                break;
            case 6:
                System.out.println("Samstag");
                break;
            case 7:
                System.out.println("Sonntag");
                break;
            default:
                System.out.println("Unbekannt");

        }


        /*
         match tag:
            case 1:
                return "Montag"
            case 2:
                return "Dienstag"
            case 3:
                return "Mittwoch"
            case 4:
                return "Donnerstag"
            case 5:
                return "Freitag"
            case 6:
                return "Samstag"
            case 7:
                return "Sonntag"
            case _:
                return "Ungültiger Tag"
         */


    }

}

