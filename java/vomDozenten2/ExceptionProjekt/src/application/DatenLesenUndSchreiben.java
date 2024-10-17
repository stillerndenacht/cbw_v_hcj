package application;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.List;

public class DatenLesenUndSchreiben {

	public static void main(String[] args) {
		Basis basis = new Abgeleitet();
		String datei = "daten.txt";
		try {
			basis.setWertInBasis(300);
			((Abgeleitet)basis).setWertInAbgeleitet(-10);
			basis.schreibeDaten(datei);
			List<String> dateiInhalt = basis.leseDaten(datei);
			for(String s : dateiInhalt) {
				System.out.println(s);
			}
		}  
		catch(MyException e) {
			System.out.println(e.getMessage());
		}
		catch (FileNotFoundException e) {
			System.out.println(e.getMessage());
		}
		catch (IOException e) {
			System.out.println(e.getMessage());
		}
		finally {
			System.out.println("Fehlerbehandlung beendet.");
		}
		
	}

}
