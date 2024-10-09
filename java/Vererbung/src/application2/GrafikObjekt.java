package application2;

import java.awt.Color;

public class GrafikObjekt {
    private int posX = 0;
    private int posY = 0; 
    private Color linienFarbe = Color.BLACK;

    public GrafikObjekt(){
        super();
        
    }
    public GrafikObjekt(int posX, int posY, Color linienFarbe){
        super();
        this.posX =posX;
        this.posY = posY;
        this.linienFarbe = linienFarbe;
        
    }

    public int getPosY() {
        return posY;
    }

    public void setPosY(int posY) {
        this.posY = posY;
    }

    public int getPosX() {
        return posX;
    }

    public void setPosX(int posX) {
        this.posX = posX;
    }

    public Color getLinienFarbe() {
        return linienFarbe;
    }

    public void setLinienFarbe(Color linienFarbe) {
        this.linienFarbe = linienFarbe;
    }
    public void print(){
        System.out.printf("Position X : %d%n",posX);
        System.out.printf("Position Y : %d%n",posY);
        System.out.printf("Linienfarbe : %d%n", linienFarbe);
    }

}
