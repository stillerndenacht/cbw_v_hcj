package application;

import java.awt.Color;

public class Start {

	public static void main(String[] args) {
		
		GrafikObjekt go = new GrafikObjekt(10, 45, Color.BLACK);
		Rechteck r2 = new Rechteck();
		GrafikObjekt r1 = new Rechteck(23, 78, Color.BLUE, 120, 50, Color.GREEN);
		go.print();
		System.out.println();
		r1.print();
		
//		r1 = go;
		System.out.println();
		
//		r1.print();
		if(r1 instanceof Rechteck) {
			( (Rechteck) r1).getFuellfarbe();
		}
		
		Kreis k = new Kreis(45, 89, Color.DARK_GRAY, 23, Color.BLUE);
		
		GrafikObjekt[] grafikObjekte = new GrafikObjekt[4];
		grafikObjekte[0] = go;
		grafikObjekte[1] = r1;
		grafikObjekte[2] = r2;
		grafikObjekte[3] = k;
		
		System.out.println("\n===================================\n");
		
		for(int index = 0; index < grafikObjekte.length; ++index) {
			grafikObjekte[index].print();
			System.out.println("******");
		}
	}

}
