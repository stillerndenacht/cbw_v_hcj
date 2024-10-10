package application;

import java.awt.Color;

public class GrafikObjekt {
	private int posX;
	private int posY;
	private Color linienFarbe;
	
	public GrafikObjekt() {
		super();
	}

	public GrafikObjekt(int posX, int posY, Color linienFarbe) {
		super();
		this.posX = posX;
		this.posY = posY;
		this.linienFarbe = linienFarbe;
	}

	public int getPosX() {
		return posX;
	}

	public void setPosX(int posX) {
		this.posX = posX;
	}

	public int getPosY() {
		return posY;
	}

	public void setPosY(int posY) {
		this.posY = posY;
	}

	public Color getLinienFarbe() {
		return linienFarbe;
	}

	public void setLinienFarbe(Color linienFarbe) {
		this.linienFarbe = linienFarbe;
	}
	
	public void print() {
		System.out.printf("Position X:  %d%n", posX);
		System.out.printf("Position Y:  %d%n", posY);
		System.out.printf("Linienfarbe: %s%n", linienFarbe.toString());
		System.out.printf("Linienfarbe: (%d, %d, %d)%n", linienFarbe.getRed(), linienFarbe.getGreen(), linienFarbe.getBlue());
	}
	
}
