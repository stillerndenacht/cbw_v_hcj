package de.montag1;

import java.util.Scanner;

public class EingabeVonKonsole {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("bitte Wert 1 eingeben: ");
        int value = scanner.nextInt();
        System.out.println("bitte Wert 2 eingeben: ");
        int value2 = scanner.nextInt();
        System.out.println(value);
        System.out.println(value2);
    }
}
