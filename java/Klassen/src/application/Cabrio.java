package application;

public class Cabrio extends Pkw {
    public Cabrio(){
        this("Porsche", 200, "Silber", 2);
        setClassName("Cabrio");}
    
    public Cabrio(String hersteller, int ps, String farbe, int anzahlSitze){
        super(hersteller, ps, farbe, anzahlSitze);
        setClassName("Cabrio");
    }
}
