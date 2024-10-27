package application;

import java.util.ArrayList;
import java.util.List;

public class Oracle_Impl implements DBInterface{
	@Override
	public void saveRechteck(Rechteckmy r) {
		System.out.println("Rechteck auf Oracle-Server gespeichert");
		
	}

	@Override
	public Rechteckmy getRechteck(int id) {
		System.out.println("Rechteck von Oracle-Server geladen");
		return new Rechteckmy();
	}

	@Override
	public List<Rechteckmy> getAll() {
		List<Rechteckmy> rechtecke = new ArrayList<Rechteckmy>();
		rechtecke.add(new Rechteckmy());
		rechtecke.add(new Rechteckmy());
		rechtecke.add(new Rechteckmy());
		System.out.println("alle Rechtecke von Oracle-Server geladen");
		return rechtecke;
	}
}
