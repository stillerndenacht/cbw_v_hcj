package application2;

import java.awt.Color;

public class Start {
    public static void main(String[] args) {
        System.out.println("----- Kreis k1 ------");
        Kreis k1 = new Kreis("u", 62, 0, 0, null, null);
        k1.print();
        k1.print_K();
        System.out.println("----- Kreis k2 ------");
        Kreis k2 = new Kreis("r", 78, 10, 10, null, null);
        k2.print();
        k2.print_K();
    }

}
