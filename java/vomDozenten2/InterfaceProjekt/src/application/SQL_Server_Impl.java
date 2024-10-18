package application;

import java.util.ArrayList;
import java.util.List;

public class SQL_Server_Impl implements DBInterface{

	@Override
	public void saveRechteck(Rechteck r) {
		System.out.println("Rechteck auf Microsoft SQL-Server gespeichert");
		
	}

	@Override
	public Rechteck getRechteck(int id) {
		System.out.println("Rechteck von Microsoft SQL-Server geladen");
		return new Rechteck();
	}

	@Override
	public List<Rechteck> getAll() {
		List<Rechteck> rechtecke = new ArrayList<Rechteck>();
		rechtecke.add(new Rechteck());
		rechtecke.add(new Rechteck());
		rechtecke.add(new Rechteck());
		System.out.println("alle Rechtecke von Microsoft SQL-Server geladen");
		return rechtecke;
	}

}
