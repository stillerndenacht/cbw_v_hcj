package de.montag1;

import java.util.ArrayList;
import java.util.Scanner;

public class ScannerThings {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("(Abbruch = exit) Beliebige Eingabe : ");

        ArrayList<String> scanArray = new ArrayList<>();

        int a = 1;
        String scannext;

        while (true) {
            System.out.println(scanner.hasNext());
            scannext = scanner.next();
            System.out.println("Durchgang : " + a + "  Wert : " + scannext);
            if ("exit".equals(scannext)) {
                System.out.println("Fertiges Array : "+scanArray);
                break;
            } else {

                // scannext = scanner.next();
                scanArray.add(scannext);
                System.out.println("bisheriges Array : "+scanArray);

                System.out.println("Ende Durchgang : " + a);
                a++;
                if ((scanner.hasNext() != true)) {
                    a = 0;

                }

            }
        }
        System.out.println("End");
    }
}
// https://docs.oracle.com/javase/8/docs/api/java/util/Scanner.html