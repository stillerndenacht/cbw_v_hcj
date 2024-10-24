package application;

import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;

public class Person extends Lebewesen implements Serializable{
	
	private static final long serialVersionUID = 1L;
	
	private String name;
	private int alter = 1;
	transient private Adresse adresse;
	
	{
		alter = 2;
	}
	
	public Person() {
		this("unbekannt", 0, "unbekannt");
		
	}


	public Person(String name, int alter, String ort) {
		super(8);
		this.name = name;
		this.alter = alter;
		this.adresse = new Adresse(ort);
	}


	@Override
	public String toString() {
		return "Person [name=" + name + ", alter=" + alter + ", Ort=" + (adresse != null?adresse.getOrt():"null") +"]";
	}


	public String getName() {
		return name;
	}


	public void setName(String name) {
		this.name = name;
	}


	public int getAlter() {
		return alter;
	}


	public void setAlter(int alter) {
		this.alter = alter;
	}
	
	private void writeObject(ObjectOutputStream out) {
		try {
			out.defaultWriteObject();
			out.writeUTF(adresse.getOrt()); // nicht serialisierbare Attribute speichern
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	private void readObject(ObjectInputStream in) {
		try {
			in.defaultReadObject();
			this.adresse = new Adresse(in.readUTF());// nicht serialisierbare Attribute wieder einlesen
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		
	}
	
}
