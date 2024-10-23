package minimals.casting;

public class Casting {
    public static void main(String[] args) {
        Basis basis = new Basis();
        Abgeleitet ab1 = new Abgeleitet();
        Abgeleitet2 ab2 = new Abgeleitet2();
        Abgeleitet refA;
        Abgeleitet2 refB;
        Object obj = basis;

        // basis = ab2;
        basis = ab1;
        refA = (Abgeleitet) basis;
        //refA = (Abgeleitet) obj;
        System.out.println(refA);
        //System.out.println(refB);

    }

}
