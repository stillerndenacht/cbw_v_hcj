package application;

import java.util.Objects;

public class Rechteck {
	private double laenge = 45;
	private double breite;
	private String rahmenfarbe = "Schwarz";
	private String fuellfarbe = "Weiß";
	
	static private int anzahlRechtecke;
	
	
	public Rechteck() {
		this(1.0, 1.0, "Rot", "Gruen");
		System.out.println("Standardkonstruktor");
	}
	
	public Rechteck(double laenge, double breite) {
		this(laenge, breite, "Rot", "Blau");
	}
	
	public Rechteck(double laenge, double breite, String rahmenfarbe, String fuellfarbe) {
		setLaenge(laenge);
		setBreite(breite);
		this.rahmenfarbe = rahmenfarbe;
		this.fuellfarbe = fuellfarbe;
		++anzahlRechtecke;
	}
	
	public static int getAnzahlRechtecke() {
//		System.out.println(laenge);
		return anzahlRechtecke;
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
	
	
	
	@Override
	public String toString() {
		return "Rechteck [laenge=" + laenge + ", breite=" + breite + "]";
	}

	protected void finalize() {
		--anzahlRechtecke;
	}

	@Override
	public int hashCode() {
		return Objects.hash(breite, fuellfarbe, laenge, rahmenfarbe);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Rechteck other = (Rechteck) obj;
		return Double.doubleToLongBits(breite) == Double.doubleToLongBits(other.breite)
				&& Objects.equals(fuellfarbe, other.fuellfarbe)
				&& Double.doubleToLongBits(laenge) == Double.doubleToLongBits(other.laenge)
				&& Objects.equals(rahmenfarbe, other.rahmenfarbe);
	}
	
	
}
