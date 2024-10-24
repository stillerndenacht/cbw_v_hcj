package application;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;

public class FileInputUndOutputStream {

	public static void main(String[] args) {
		try {
			FileInputStream in = new FileInputStream("eclipse.exe");
			FileOutputStream out = new FileOutputStream("copy of eclipse.exe");
			byte[] buffer	= new byte[1024];
			int anzahl;
			while ((anzahl = in.read(buffer)) != -1) {
				out.write(buffer, 0, anzahl);
			}
			
			in.close();
			out.close();
			} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
				
				e.printStackTrace();
			}

	}

}
