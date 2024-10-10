package application;

import java.awt.Color;

public class Rechteck extends GrafikObjekt{
	
	private int laenge = 100;
	private int breite;
	private Color fuellfarbe;
	
	
	public Rechteck() {
		this(0, 0, Color.BLACK, 0, 0, Color.WHITE);
	}
	
	public Rechteck(int posX, int posY, Color linienfarbe, int laenge, int breite, Color fuellfarbe) {
		super(posX, posY, linienfarbe);
		setLaenge(laenge);
		setBreite(breite);
		setFuellfarbe(fuellfarbe);
	}
	
	public int getLaenge() {
		return laenge;
	}
	public void setLaenge(int laenge) {
		this.laenge = laenge;
	}
	public int getBreite() {
		return breite;
	}
	public void setBreite(int breite) {
		this.breite = breite;
	}
	public Color getFuellfarbe() {
		return fuellfarbe;
	}
	public void setFuellfarbe(Color fuellfarbe) {
		this.fuellfarbe = fuellfarbe;
	}
	
	@Override
	public void print() {
		super.print();
		System.out.printf("Laenge:      %d%n", laenge);
		System.out.printf("Breite:      %d%n", breite);
		System.out.printf("Fuellfarbe:  (%d, %d, %d)%n", fuellfarbe.getRed(), fuellfarbe.getGreen(), fuellfarbe.getBlue());
	}
	

}
