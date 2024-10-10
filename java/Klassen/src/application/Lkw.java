package application;

public class Lkw extends Fahrzeug {
    private int zuglast;

    public Lkw() {
        this("Scania", 400, "Blau", 3, 2000 );
        setClassName("Lkw");
    }

    public Lkw(String hersteller, int ps, String farbe, int anzahlSitze, int zuglast) {
        super(hersteller, ps, farbe, anzahlSitze);
        setClassName("Lkw");
        setZuglast(zuglast);

    }

    public int getZuglast() {
        return zuglast;
    }

    public void setZuglast(int zuglast) {
        this.zuglast = zuglast;
    }

    @Override
    public void print(){
        super.print();
        System.out.printf("%nZuglast:       %20d", this.zuglast);
    }
}
