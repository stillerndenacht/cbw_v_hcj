package application;

import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class WriterUndReader {

	public static void main(String[] args) {
		try {
			FileWriter out =new FileWriter("text.txt");
			out.write("Hallo");
			out.write('\n');
			out.write("Welt");
//			out.flush();  // erzwingt das Schreiben des Puffers
			out.close(); // schreibt Puffer und schließt die Datei
			
			FileReader in = new FileReader("text.txt");
			int zeichen;
			while( (zeichen = in.read()) != -1) {
				System.out.print((char)zeichen);
			}
			in.close();
			
			FileWriter copy = new FileWriter("text2.txt");
			in = new FileReader("text.txt");
			char[] buffer = new char[2];
			int anzahl;
			while ( (anzahl = in.read(buffer)) != -1){
				copy.write(buffer, 0, anzahl);
			}
			
			in.close();
			copy.close();
			
		} catch (IOException e) {
			e.printStackTrace();
		}

	}

}
