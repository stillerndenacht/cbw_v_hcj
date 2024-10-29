package minimals.enumthings;

import java.awt.Color;

public enum Stockwerk {
    UG5("Untergeschoss -05", Color.GREEN),
    UG4("Untergeschoss -04", Color.GREEN),
    UG3("Untergeschoss -03", Color.GREEN),
    UG2("Untergeschoss -02", Color.GREEN),
    UG1("Untergeschoss -01", Color.GREEN),
    EG("Erdgeschoss 00", Color.YELLOW),
    OG1("Obergeschoss 01", Color.WHITE),
    OG2("Obergeschoss 02", Color.WHITE),
    OG3("Obergeschoss 03", Color.WHITE),
    OG4("Obergeschoss 04", Color.WHITE),
    OG5("Obergeschoss 05", Color.WHITE),
    OG6("Obergeschoss 06", Color.WHITE),
    OG7("Obergeschoss 07", Color.WHITE),
    OG8("Obergeschoss 08", Color.WHITE),
    OG9("Obergeschoss 09", Color.WHITE),
    OG10("Obergeschoss 10", Color.WHITE);

    private String bezeichner;
    private Color farbe;
    private static Stockwerk[] stockwerke = Stockwerk.values();
    private static int anzahl = stockwerke.length;

    private Stockwerk() {
        this("", Color.WHITE);
    }

    private Stockwerk(String bezeichner, Color farbe) {
        this.bezeichner = bezeichner;
        this.farbe = farbe;
    }

    public String getBezeichner() {
        return bezeichner;
    }

    public void setBezeichner(String bezeichner) {
        this.bezeichner = bezeichner;
    }

    public Color getFarbe() {
        return farbe;
    }

    public void setFarbe(Color farbe) {
        this.farbe = farbe;
    }

    public Stockwerk stockUp() {
        int ordinal = this.ordinal();
        if (ordinal < anzahl - 1) {
            //System.out.println("up more");// Erreichbarkeitstest
            return stockwerke[ordinal + 1];
        } else {
            return this;
        }
    }
    public Stockwerk stockDown() {
        int ordinal = this.ordinal();
        if (ordinal < anzahl - 1 && ordinal > 0) {
            return stockwerke[ordinal - 1];
        } else {
            return this;
        }
    }
}
