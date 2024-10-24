package application;

import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;

public class DataInputUndOutputStream {
	public static void main(String[] args) {
		try {
			DataOutputStream out = new DataOutputStream(new FileOutputStream("eclipse.exe"));
			out.writeDouble(23.56);
			out.writeUTF("Hallo Welt");
			out.writeInt(56);
			out.writeBoolean(true);
			out.writeChar('A');
			out.close();
			DataInputStream in = new DataInputStream(new FileInputStream("eclipse.exe"));
			double d = in.readDouble();
			
			String text = in.readUTF();
			int i = in.readInt();
			boolean ok = in.readBoolean();
			
			char ch = in.readChar();
			in.close();
			
			System.out.println(d);
			System.out.println(text);
			System.out.println(i);
			System.out.println(ok);
			System.out.println(ch);
			
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {

			e.printStackTrace();
		}

	}

}
