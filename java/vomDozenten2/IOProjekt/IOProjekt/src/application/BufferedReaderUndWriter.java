package application;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class BufferedReaderUndWriter {

	public static void main(String[] args) {
		try {
			BufferedWriter out = new BufferedWriter(new FileWriter("text.txt"));
			out.write("Hallo");
			out.write('\n');
			out.write("Welt");
//			out.flush();  // erzwingt das Schreiben des Puffers
			out.close(); // schreibt Puffer und schließt die Datei
			
			BufferedReader in = new BufferedReader(new FileReader("text.txt"));
			String zeile;
			while( (zeile = in.readLine()) != null) {
				System.out.print(zeile);
			}
			in.close();
			
			FileWriter copy = new FileWriter("text2.txt");
			in = new BufferedReader(new FileReader("text.txt"));
			
			
			while ( (zeile = in.readLine()) != null){
				copy.write(zeile);
				copy.write("\n");
			}
			
			in.close();
			copy.close();
			
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

}
