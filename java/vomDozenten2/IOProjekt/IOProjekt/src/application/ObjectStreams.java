package application;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;

public class ObjectStreams {

	public static void main(String[] args) {
		Person p = new Person("willi", 34, "Hamburg");
		System.out.println(p);
		
		try {
//			ObjectOutputStream out = new ObjectOutputStream(new FileOutputStream("personen.dat"));
//			out.writeObject(p);
//			out.close();
//			System.out.println("Person gespeichert");
//		
			
			ObjectInputStream in = new ObjectInputStream(new FileInputStream("personen.dat"));
			Person pers = (Person) in.readObject();
			in.close();
			
			System.out.println(pers);
			
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		} 
		catch (ClassNotFoundException e) {
			e.printStackTrace();
		}

	}

}
