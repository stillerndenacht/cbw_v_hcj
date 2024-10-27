package application;

import java.util.List;

public class InterfaceTest {

	public static void main(String[] args) {
		Rechteckmy r = new Rechteckmy();
		
		DBInterface db = new Oracle_Impl();
		
		db.saveRechteck(r);
		Rechteckmy neu = db.getRechteck(100);
		List<Rechteckmy> alle = db.getAll();
		
	}

}
