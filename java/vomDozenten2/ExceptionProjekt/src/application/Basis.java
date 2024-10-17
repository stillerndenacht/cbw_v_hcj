package application;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;

public class Basis {
	private int wertInBasis = 10;
	
	
	
	public int getWertInBasis() {
		return wertInBasis;
	}
	
	public void setWertInBasis(int wertInBasis) throws IllegalArgumentException{
		if(wertInBasis < 0) {
			throw new IllegalArgumentException("unzulaessiger Wert für wertInBasis: " + wertInBasis);
		}
		
		this.wertInBasis = wertInBasis;
	}

	public void schreibeDaten(String datei) throws IOException {
			PrintWriter writer = new PrintWriter(new FileWriter(datei));
			for(int zeile = 1; zeile < 11; ++zeile) {
				writer.printf("Zeile %d: %d%n", zeile, wertInBasis);
			}
//			writer.flush();
			writer.close();
		
		
	}
	
	public ArrayList<String> leseDaten(String datei) throws IOException, FileNotFoundException {
		ArrayList<String> inhalt = new ArrayList<>();
		
			BufferedReader reader = new BufferedReader(new FileReader(datei));
			String zeile;
			while((zeile = reader.readLine()) != null) {
				inhalt.add(zeile);
			}
			reader.close();
		
		return inhalt;
	}
}
