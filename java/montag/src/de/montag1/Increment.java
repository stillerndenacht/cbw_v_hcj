package de.montag1;

public class Increment {
public static void main(String[] args) {
    // Incremente
    int i1 = 5;
    int j1 = ++i1; //Pre-Increment i1 wird vor der Benutzung erhöht

    System.out.println("i1: " + i1); // 6
    System.out.println("j1: " + j1); // 6 : daher ist j2 schon der erhöhte Wert von i2

    int i2 = 5;
    int j2 = i2++; //Post-Increment i2 wird nach der Benutzung erhöht

    System.out.println("i2: " + i2); // 6
    System.out.println("j2: " + j2); // 5 : daher bleibt j2 bei dem Ausgangswert von i2
}
}
