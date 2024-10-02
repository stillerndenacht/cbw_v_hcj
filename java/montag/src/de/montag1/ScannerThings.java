package de.montag1;

import java.util.ArrayList;
import java.util.Scanner;

public class ScannerThings {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Beliebige Eingabe : ");

        ArrayList<String> scanArray = new ArrayList<>();

        int a = 1;
        String scannext;

        while (true) {
            System.out.println(scanner.hasNext());
            scannext = scanner.next();
            System.out.println("a" + a + scannext);
            if ("c".equals(scannext)) {
                break;
            } else {

                a++;
                //scannext = scanner.next();
                scanArray.add(scannext);

                System.out.println(scanArray);

                System.out.println("end loop" + a);
                if ((scanner.hasNext() != true)) {
                    a = 0;
                
                }

            }
        }
        System.out.println("End");
    }
}
//https://docs.oracle.com/javase/8/docs/api/java/util/Scanner.html