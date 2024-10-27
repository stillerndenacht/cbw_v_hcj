package application;

import java.util.ArrayList;
import java.util.List;

public class SQL_Server_Impl implements DBInterface{

	@Override
	public void saveRechteck(Rechteckmy r) {
		System.out.println("Rechteck auf Microsoft SQL-Server gespeichert");
		
	}

	@Override
	public Rechteckmy getRechteck(int id) {
		System.out.println("Rechteck von Microsoft SQL-Server geladen");
		return new Rechteckmy();
	}

	@Override
	public List<Rechteckmy> getAll() {
		List<Rechteckmy> rechtecke = new ArrayList<Rechteckmy>();
		rechtecke.add(new Rechteckmy());
		rechtecke.add(new Rechteckmy());
		rechtecke.add(new Rechteckmy());
		System.out.println("alle Rechtecke von Microsoft SQL-Server geladen");
		return rechtecke;
	}

}
