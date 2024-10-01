package de.montag1;

import java.util.Scanner;

public class SchaltJahr {
    public static void main(String[] args) {
        System.out.println("----- Wir berechnen ob es ein Schaltjahr ist ----");
        Scanner jahr = new Scanner(System.in);
        System.out.println("Bitte geben sie eine Ganzzahl ein die geprüft werden soll : ");
        int testjahr = jahr.nextInt();

        if (((testjahr % 4 == 0) && (testjahr % 100 != 0)) || (testjahr % 400 == 0)) {
            System.out.printf("Das Jahr %d ist ein Schaltjahr.", testjahr);

        } else {
            System.out.printf("Das Jahr %d ist KEIN Schaltjahr.", testjahr);
        }
    }

}
