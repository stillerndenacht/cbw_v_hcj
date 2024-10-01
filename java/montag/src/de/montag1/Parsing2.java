package de.montag1;

import java.util.Scanner;

public class Parsing2 {
    public static void main(String[] args) {
               System.out.println("---- Übung 4 Berechnung des Durchschnitts --------");
        Scanner scanner = new Scanner(System.in);

        System.out.println("Bitte geben sie drei Ganzzahlen ein, getrennt durch Whitespace: ");
        // der Scanner scannt default bis zum nächsten Whitespace
        int y1 = scanner.nextInt();      
        int y2 = scanner.nextInt();        
        int y3 = scanner.nextInt();

        System.out.printf("Ihre Zahlen lauten %d, %d, %d %n", y1, y2, y3);
        System.out.println("Der Durchschnitt aus diesen drei Zahlen ist: " + (((double) y1 + y2 + y3) / 3));
    }
}
