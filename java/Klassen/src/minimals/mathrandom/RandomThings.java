package minimals.mathrandom;

import java.security.SecureRandom;
import java.util.Random;

public class RandomThings {
    public static void main(String[] args) {
        System.out.println("----Random ----------");
        Random rand = new Random();
        int value;
        for (int i = 0; i < 10; ++i) {
            value = rand.nextInt(); // nextInt(10) - Bound 10 liefert Werte bis 9
            System.out.println(value);
        }
        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        System.out.println("----Random mit Seed ----------");
        Random randd = new Random(10);
        int value2 = 0;
        for (int i = 0; i < 10; ++i) {
            value2 = randd.nextInt();
            System.out.println(value2);
        }
        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        System.out.println("----Random booleans ----------");
        Random randbool = new Random(); // bei seed 10 - new Random(10) und 10000 Durchläufen produziert das genau 5000
                                        // true und 5000 false =) bei seed 13 in 100 Durchläufen 50/50
        boolean valuebool;
        int truebool = 0;
        int falsebool = 0;
        for (int i = 0; i < 100; ++i) {
            valuebool = randbool.nextBoolean();
            if (valuebool == true) {
                truebool += 1;
            } else {
                falsebool += 1;
            }
            System.out.println(valuebool);

        }
        System.out.println("truebool  : " + truebool);
        System.out.println("falsebool : " + falsebool);

        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        System.out.println("----SecureRandom booleans ----------");
        SecureRandom randbool2 = new SecureRandom();
        boolean valuebool2;
        int truebool2 = 0;
        int falsebool2 = 0;
        for (int i = 0; i < 100; ++i) {
            valuebool2 = randbool2.nextBoolean();
            if (valuebool2 == true) {
                truebool2 += 1;
            } else {
                falsebool2 += 1;
            }
            System.out.println(valuebool2);

        }
        System.out.println("secure truebool  : " + truebool2);
        System.out.println("secure falsebool : " + falsebool2);

        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        System.out.println("\n-------Random Zahlen 1-10 gezählte Häufigkeit -----\n");
        Random randto10 = new Random();
        int randzahl;
        int rand0 = 0, rand1 = 0, rand2 = 0, rand3 = 0, rand4 = 0, rand5 = 0, rand6 = 0, rand7 = 0, rand8 = 0,
                rand9 = 0, rand10 = 0;

        for (int i = 0; i < 100; ++i) {
            randzahl = randto10.nextInt(11);
            switch (randzahl) {
                case 0:
                    rand0 += 1;
                    break;
                case 1:
                    rand1 += 1;
                    break;
                case 2:
                    rand2 += 1;
                    break;
                case 3:
                    rand3 += 1;
                    break;
                case 4:
                    rand4 += 1;
                    break;
                case 5:
                    rand5 += 1;
                    break;
                case 6:
                    rand6 += 1;
                    break;
                case 7:
                    rand7 += 1;
                    break;
                case 8:
                    rand8 += 1;
                    break;
                case 9:
                    rand9 += 1;
                    break;
                default:
                    rand10 += 1;
                    break;
            }

            System.out.println(randzahl);

        }
        System.out.printf(
                "rand0 = %d%nrand1 = %d%nrand2 = %d%nrand3 = %d%nrand4 = %d%nrand5 = %d%nrand6 = %d%nrand7 = %d%nrand8 = %d%nrand9 = %d%nrand10 = %d%n",
                rand0, rand1, rand2, rand3, rand4, rand5, rand6, rand7, rand8, rand9, rand10);

        // System.out.println("----Random mit IntStream ----------");
        // Random randInts = new Random();

        // for (int i = 0; i < 100; ++i) {
        // IntStream value3 = randInts.ints(10, 1, 10);
        // System.out.println(value3);
        // }
    }
}
