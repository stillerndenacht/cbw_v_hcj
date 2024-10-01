package de.montag1;

import java.util.Scanner;

public class StringDoings {
    public static void main(String[] args) {
        System.out.println(" \n..... Übung 2 : Wir manipulieren an Strings..........\n");

        Scanner scanner = new Scanner(System.in);
        System.out.println("Bitte geben Sie einen Namen ein : ");
        String name = scanner.nextLine();
        System.out.println("ihre Eingabe: " + name);

        System.out.println("Die Länge der Eingabe: " + name.length());

        System.out.println("Die Eingabe in Großbuchstaben: " + name.toUpperCase());

        System.out.println("Der erste Buchstabe der Eingabe: " + name.charAt(0));

        System.out.println("\n..... Übung 5 String-Verarbeitung und Vergleich .......\n");
        
        System.out.println("Bitte geben sie ein erstes Wort ein: ");
        String word1 = scanner.nextLine();
        System.out.println("Bitte geben sie ein zweites Wort ein: ");
        String word2 = scanner.nextLine();
        System.out.println("Ihre zwei Worte sind gleich lang, ist : " + (word1.length() == word2.length()));
        System.out.println("Die Wörter enthalten die gleichen Buchstaben, ist : "
                + (word1.toLowerCase().equals(word2.toLowerCase())));

        if (word1.length() > word2.length()) {
            System.out.println("Das längere der beiden Worte lautet : " + word1);
        } else if (word1.length() < word2.length()) {
            System.out.println("Das längere der beiden Worte lautet : " + word2);
        } else {
            System.out.printf("Die Worte '%s' und '%s' sind gleich lang.%n", word1, word2);
        }
        System.out.println("-------- ENDE -------");

    }
}
