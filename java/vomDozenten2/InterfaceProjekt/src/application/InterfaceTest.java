package application;

import java.util.List;

public class InterfaceTest {

	public static void main(String[] args) {
		Rechteck r = new Rechteck();
		
		DBInterface db = new Oracle_Impl();
		
		db.saveRechteck(r);
		Rechteck neu = db.getRechteck(100);
		List<Rechteck> alle = db.getAll();
		
	}

}
