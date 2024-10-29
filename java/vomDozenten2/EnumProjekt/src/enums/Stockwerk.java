package enums;

import java.awt.Color;

public enum Stockwerk {
	UG5("Untergeschoss 5", Color.BLACK), 
	UG4("Untergeschoss 4", Color.BLACK), 
	UG3("Untergeschoss 3", Color.BLACK), 
	UG2("Untergeschoss 2", Color.BLACK), 
	UG1("Untergeschoss 1", Color.BLACK), 
	EG("Erdgeschoss", Color.BLACK), 
	OG1("Obergeschoss 1", Color.BLACK), 
	OG2("Obergeschoss 2", Color.BLACK), 
	OG3("Obergeschoss 3", Color.BLACK), 
	OG4("Obergeschoss 4", Color.BLACK), 
	OG5("Obergeschoss 5", Color.BLACK);
	
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
	
	public Stockwerk next() {
		int ordinal = this.ordinal();
		if(ordinal < anzahl - 1) {
			return stockwerke[ordinal + 1];
		} else {
			return this;
		}
	}
	
}
