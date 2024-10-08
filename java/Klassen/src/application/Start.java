package application;

public class Start {
    public static void main(String[] args) {
        Rechteck r1;
        r1 = new Rechteck();
        r1.setBreite(12);
        r1.setLaenge(56);

        System.out.println(r1.getBreite());
        System.out.println(r1.getLaenge());

        Rechteck r2 = new Rechteck();
        r2.print();

        System.out.println("------Kreis k1-------");
        Kreis k1;
        k1 = new Kreis();
        k1.print();
        k1.setRadius(10);
        // k1.setUmfang(62.8);
        k1.setRadius(12);
        System.out.println(k1.getRadius());
        k1.print();

        System.out.println("------Kreis k2-------");
        Kreis k2 = new Kreis(15.0);
        k2.print();
        System.out.println(k2);
    }
}
