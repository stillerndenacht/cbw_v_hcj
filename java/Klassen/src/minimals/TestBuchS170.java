package minimals;

import java.util.Arrays;

public class TestBuchS170 {
    public static void main(String[] args) {

        doIt(10);
        char cha = 97;
        int index = 0;
        String[] chars = new String[4];
        for(String s : chars){
            s = ""+cha;
            Arrays.fill(chars,index,index+1,s);
            index++;
            cha++;
        }


        System.out.println(Arrays.toString(chars));
    }

    public static void doIt(int h) {
        int x = 1;
        LOOP1: do {
            LOOP2: for (int y = 1; y < h; y++) {
                // if (y == x)
                    // continue;
                if (x * x + y * y == h * h) {
                    System.out.println("x" + x + "y" + y+"Produkte"+x*x+","+y*y);
                    break LOOP1;

                }
            }
            x++;
        } while (x < h);
    }
}
