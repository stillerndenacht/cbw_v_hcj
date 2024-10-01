package de.montag1;

import java.util.Scanner;

public class Parsing {
    public static void main(String[] args) {
        System.out.println("----- übung 3 Typkonvertierung -------");
        
        Scanner scanner = new Scanner(System.in);
        System.out.println("Bitte geben sie ein Ganzzahl ein: ");
        int x = scanner.nextInt();
        System.out.println("Ihre Zahl lautet: " + x);
        System.out.println("Ihre Zahl mit 10 multipliziert: " + x * 10);

        System.out.println("------ Übung 4 Berechnung des Durchschnitts --------");

        System.out.println("Bitte geben sie die erste Ganzzahl ein: ");
        int y1 = scanner.nextInt();
        System.out.println("Bitte geben sie die zweite Ganzzahl ein: ");
        int y2 = scanner.nextInt();
        System.out.println("Bitte geben sie die dritte Ganzzahl ein: ");
        int y3 = scanner.nextInt();

        System.out.printf("Ihre Zahlen lauten %d, %d, %d %n", y1, y2, y3);
        System.out.println("Der Durchschnitt aus diesen drei Zahlen ist: " + (((double) y1 + y2 + y3) / 3));
    }
}
