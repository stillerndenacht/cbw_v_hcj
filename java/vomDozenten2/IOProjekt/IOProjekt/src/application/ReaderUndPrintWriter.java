package application;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class ReaderUndPrintWriter {

	public static void main(String[] args) {
		 try {
			PrintWriter out = new PrintWriter(new FileWriter("text3.txt"));
			out.println(345.67);
			out.println(true);
			out.println("Test");
			out.println('R');
			out.printf("4.2 + 5.6 = %.2f\n", (4.2+5.6));
			out.close();
			
			BufferedReader in = new BufferedReader(new FileReader("text3.txt"));
			String zeile;
			while((zeile = in.readLine()) != null) {
				System.out.println(zeile);
			}
			in.close();
		} catch (IOException e) {
			e.printStackTrace();
		}

	}

}
