package de.montag1;

import java.util.Scanner;

public class Rechteck {
    public static void main(String[] args) {
        System.out.println("Rechteck Berechnung Fläche ..........");
        Scanner scanner = new Scanner(System.in);
        System.out.println("Bitte geben sie eine Seitenlänge ein: ");
        double value1 = scanner.nextDouble();
        System.out.println("Bitte geben sie die zweite Seitenlänge ein: ");
        double value2 = scanner.nextDouble();
        double flaeche = value1 * value2;
        System.out.println("Ihre Werte:\nSeite 1 : " + value1 + "\nSeite 2 : " + value2);
        System.out.println("Die Fläche des Rechtecks ist : " + flaeche);
    }
}
