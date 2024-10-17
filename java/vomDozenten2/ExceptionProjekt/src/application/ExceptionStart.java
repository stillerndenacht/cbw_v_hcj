package application;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.List;

public class ExceptionStart {

	public static void main(String[] args) {
		int zahl1 = 10, zahl2 = 1, erg = 0;
		Rechteck rechteck = new Rechteck();
		int[] werte = {23, 45, 67};
		
		
		try {
			erg = zahl1 / zahl2;
			System.out.println(rechteck.getBreite());
			System.out.println(werte[2]);
		
		}  
		catch (ArithmeticException | ArrayIndexOutOfBoundsException fehler) {
			System.out.println(fehler.getMessage());
			fehler.printStackTrace();
		}
		catch(RuntimeException e) {
			System.out.println("RuntimeException");
			System.out.println(e.getMessage());
		}
		
		finally {
			System.out.println("Fehlerbehandlung beendet.");
		}
		
		
		System.out.println(erg);
	}

}
