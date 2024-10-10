package application;

import java.awt.Color;

public class Rechteck extends GrafikObjekt{
	{
		System.out.println("erster Objektinitialisierungsblock");
		laenge = 7;
	}
	
	static {
		System.out.println("erster Klasseninitialisierungsblock");
	}
	private int laenge = 100;
	private int breite;
	private Color fuellfarbe;
	
	{
		System.out.println("zweiter Objektinitialisierungsblock");
		laenge = 9;
	}
	
	static {
		System.out.println("zweiter Klasseninitialisierungsblock");
	}
	
	public Rechteck() {
		this(0, 0, Color.BLACK, 0, 0, Color.WHITE);
	}
	
	public Rechteck(int posX, int posY, Color linienfarbe, int laenge, int breite, Color fuellfarbe) {
		super(posX, posY, linienfarbe);
//		this.setPosX(posX);
//		setPosY(posY);
//		setLinienFarbe(linienfarbe);
		setLaenge(laenge);
		setBreite(breite);
		setFuellfarbe(fuellfarbe);
	}
	
	{
		System.out.println("dritter Objektinitialisierungsblock");
		laenge = 12;
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
	
	
	

}
