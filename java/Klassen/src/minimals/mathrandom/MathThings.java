package minimals.mathrandom;

public class MathThings {
    public static void main(String[] args) {
        System.out.println("----Math-Class ----------");
        double value;
        for (int i = 1; i < 20; ++i) {
            value = Math.random();
            System.out.println(value + " ");
        }

        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        int Obergrenze = 20;
        int Untergrenze = 1;
        for (int i = 1; i < 20; ++i) {
            value = Math.random() * Obergrenze + Untergrenze;
            double value2 = Math.round(value);
            System.out.println(value + " => " + value2);
        }
        System.out.println("\n ~ ~ ~~ ~~ ~~~  ~~~  ~~~  ~~~~   ~~~~\n");
        System.out.println("------- float Math.next() --------------");
        float float1 = 1f;
        float float15 = 1.5f;
        float float05 = 0.5f;
        System.out.println("ulp float 1            : " + Math.ulp(float1)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(float1));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(float1)));
        System.out.println("nextDown               : " + Math.nextDown(float1));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(float1)));
        System.out.println("nextAfter              : " + Math.nextAfter(float1, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(float1, 2), 2) + "\n");

        System.out.println("ulp float 1.5          : " + Math.ulp(float15)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(float15));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(float15)));
        System.out.println("nextDown               : " + Math.nextDown(float15));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(float15)));
        System.out.println("nextAfter              : " + Math.nextAfter(float15, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(float15, 2), 2) + "\n");

        System.out.println("ulp float 0.5          : " + Math.ulp(float05)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(float05));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(float05)));
        System.out.println("nextDown               : " + Math.nextDown(float05));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(float05)));
        System.out.println("nextAfter              : " + Math.nextAfter(float05, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(float05, 2), 2) + "\n");

        System.out.println("------- double Math.next() --------------");
        double double1 = 1;
        double double15 = 1.5;
        double double05 = 0.5;
        System.out.println("ulp double 1           : " + Math.ulp(double1)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(double1));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(double1)));
        System.out.println("nextDown               : " + Math.nextDown(double1));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(double1)));
        System.out.println("nextAfter              : " + Math.nextAfter(double1, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(double1, 2), 2) + "\n");

        System.out.println("ulp double 1.5         : " + Math.ulp(double15)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(double15));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(double15)));
        System.out.println("nextDown               : " + Math.nextDown(double15));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(double15)));
        System.out.println("nextAfter              : " + Math.nextAfter(double15, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(double15, 2), 2) + "\n");

        System.out.println("ulp double 0.5         : " + Math.ulp(double05)+"\n");
        System.out.println("nextUp                 : " + Math.nextUp(double05));
        System.out.println("nextUp(nextUp)         : " + Math.nextUp(Math.nextUp(double05)));
        System.out.println("nextDown               : " + Math.nextDown(double05));
        System.out.println("nextDown(nextDown)     : " + Math.nextDown(Math.nextDown(double05)));
        System.out.println("nextAfter              : " + Math.nextAfter(double05, 2));
        System.out.println("nextAfter(nextAfter)   : " + Math.nextAfter(Math.nextAfter(double05, 2), 2) + "\n");
    }
}
