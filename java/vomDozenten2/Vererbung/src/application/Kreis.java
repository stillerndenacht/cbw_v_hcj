package application;

import java.awt.Color;

public class Kreis extends GrafikObjekt {
	private int radius;
	private Color fuellfarbe;
	public Kreis() {
		super();
	}
	public Kreis(int posX, int posY, Color linienFarbe, int radius, Color fuellfarbe) {
		super(posX, posY, linienFarbe);
		this.radius = radius;
		this.fuellfarbe = fuellfarbe;
	}
	public int getRadius() {
		return radius;
	}
	public void setRadius(int radius) {
		this.radius = radius;
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
		System.out.printf("Radius:      %d%n", radius);
		System.out.printf("Fuellfarbe:  (%d, %d, %d)%n", fuellfarbe.getRed(), fuellfarbe.getGreen(), fuellfarbe.getBlue());
	}
	
	
	
}
