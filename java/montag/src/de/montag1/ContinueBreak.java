package de.montag1;

public class ContinueBreak {
    public static void main(String[] args) {
        System.out.println("\n-----continue--------\n");
        for (int i = 0; i < 5; ++i) {
            if (i == 3) {
                System.out.println("i == 3; continue");
                continue;
            }
            System.out.println("i : " + i);
        }
        System.out.println("Ende");

        System.out.println("\n-----break--------\n");
        for (int j = 0; j < 5; ++j) {
            if (j == 3) {
                System.out.println("j == 3; break");
                break;
            }
            System.out.println("j : " + j);
        }
        System.out.println("Ende");

        System.out.println("\n-----break mit int vor for-loop--------\n");
        int h;
        for (h = 0; h < 5; ++h) {
            if (h == 3) {
                System.out.println("h == 3; break");
                break;
                // System.out.println("h == 3; continue");
                // continue;
            }
            System.out.println("h : " + h);
        }
        System.out.println("h nach for-loop : " + h);
        System.out.println("Ende");

        System.out.println("\n-----mit LABEL--------\n");

        // je nachdem wie man welchen loop fortsetzt/abbricht ergeben sich andere
        // Ausgaben - den Loop kann man mit Identifier labeln bspw. als out und in
        // das break/continue kann nur auf den eigenen bzw. äußeren Loop wirken nicht auf innere (also nicht vom out auf den inin)
        out: for (int o = 0; o <= 1; ++o) {
            System.out.println("o out :" + o);
            in: for (int p = 0; p <= 1; ++p) {
                System.out.println("p in :" + p);
                inin: for (int q = 0; q <= 1; ++q) {
                    System.out.println("q inin :" + q);
                    // break in;
                    //continue in;
                    //continue out;
                    //break out;            
                }
                // continue out;
                //break out;
                //break in;
            }
        }

        System.out.println("\n-----mit LABEL 2 --------\n");

        outer: for (int x = 0; x < 3; ++x) {
            System.out.println("vor middle x: " + x);
            middle: for (int y = 0; y < 3; ++y) {
                System.out.println("vor inner y: " + y);
                inner: for (int z = 0; z < 3; ++z) {
                    System.out.println("in inner z: " + z);
                    // break inner;
                    break middle;

                }
                System.out.println("nach inner");
            }
            System.out.println("nach middle");
        }
        System.out.println("nach outer");

    }

}
