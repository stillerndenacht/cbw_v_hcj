package de.montag1;

import java.util.Scanner;

public class StringDoings {
    public static void main(String[] args) {
        System.out.println("Wir manipulieren an Strings..........");
        Scanner scanner = new Scanner(System.in);
        System.out.println("Bitte geben Sie einen Namen ein : ");
        String name = scanner.nextLine();
        // hier war Feierabend...
        System.out.println(name);
    }
}
