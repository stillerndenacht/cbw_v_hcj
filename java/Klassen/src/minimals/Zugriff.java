package minimals;

// Erzeugung der Objekte in packageThings_Start ...

public class Zugriff {
    int defaultZugriff = 0;
    private int privateZugriff = 1;
    protected int protectedZugriff = 2;
    public int publicZugriff = 3;

    public void zugriffsprint() {
        System.out.println("defaultZugriff : " + defaultZugriff);
        System.out.println("privateZugriff : " + privateZugriff);
        System.out.println("protectedZugriff : " + protectedZugriff);
        System.out.println("publicZugriff : " + publicZugriff);
    }
}
