package application;

public class Rechteck {
	private double laenge = 45;
	private double breite;
	private String rahmenfarbe = "Schwarz";
	private String fuellfarbe = "Weiß";
	
	
	
	public Rechteck() {
		this(1.0, 1.0, "Rot", "Gruen");
	}	
	
	public Rechteck(double laenge, double breite) {
		this(laenge, breite, "Rot", "Blau");
	}
	
	public Rechteck(double laenge, double breite, String rahmenfarbe, String fuellfarbe) {
		setLaenge(laenge);
		setBreite(breite);
		this.rahmenfarbe = rahmenfarbe;
		this.fuellfarbe = fuellfarbe;
		
	}
	

	
	public double getBreite() {
//		System.out.println(anzahlRechtecke);
		return breite;
	}
	
	public double getLaenge() {
		return this.laenge;
	}
	
	public String getRahmenfarbe() {
		return rahmenfarbe;
	}
	
	public String getFuellFarbe() {
		return fuellfarbe;
	}
	
	public void setBreite(double breite) {
		if(breite < 0.0 || breite > 1000) {
			System.out.println("Falscher Wert für die Breite: " + breite);
			return;
		}
		this.breite = breite;
	}
	
	public void setLaenge(double laenge) {
		if(laenge < 0.0 || laenge > 1000) {
			System.out.println("Falscher Wert für die Breite: " + laenge);
			
		} else {
			this.laenge = laenge;
		}
	}
	
	public void setRahmenfarbe(String rahmenfarbe) {
		this.rahmenfarbe = rahmenfarbe;
	}
	
	public void setFuellfarbe(String fuellfarbe) {
		this.fuellfarbe = fuellfarbe;
	}
	
	public void print() {
		System.out.printf("Laenge:         %12.2f %n", laenge);
		System.out.printf("Breite:         %12.2f %n", breite);
		System.out.printf("Rahmenfarbe:    %12s %n", rahmenfarbe);
		System.out.printf("Fuellfarbe:     %12s %n", fuellfarbe);
	}

}
