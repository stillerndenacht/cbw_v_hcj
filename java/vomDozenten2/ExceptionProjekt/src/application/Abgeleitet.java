package application;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.SQLException;
import java.util.ArrayList;

public class Abgeleitet extends Basis {
	private int wertInAbgeleitet = 20;

	public int getWertInAbgeleitet() {
		return wertInAbgeleitet;
	}

	public void setWertInAbgeleitet(int wertInAbgeleitet) {
		if(wertInAbgeleitet < 0) {
//			throw new IllegalArgumentException("unzulaessiger Wert für wertInAbgeleitet: " + wertInAbgeleitet);
			throw new MyException("unzulaessiger Wert für wertInAbgeleitet: " + wertInAbgeleitet, 22, "setWertInAbgeteitet()", 35647);
		}
		this.wertInAbgeleitet = wertInAbgeleitet;
	}

	@Override
	public void schreibeDaten(String datei) throws ArithmeticException /*SQLException unzulässig, da von überschriebener Methode nicht geworfen*/{
		PrintWriter writer;
		try {
			writer = new PrintWriter(new FileWriter(datei));
			for(int zeile = 1; zeile < 11; ++zeile) {
				writer.printf("Zeile %d: %d%n", zeile, getWertInBasis());
				writer.printf("Zeile %d: %d%n", zeile, getWertInAbgeleitet());
			}
//			writer.flush();
			writer.close();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	
	}


	
	
	
}
