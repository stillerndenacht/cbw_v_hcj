package application;

import java.util.ArrayList;

public class GenericsTest {

	public static void main(String[] args) {
		ArrayList liste = new ArrayList();
		
		liste.add(45);
		
		int x = (Integer)liste.get(0);
		System.out.println(x);
		
		System.out.println("\n===================================\n");
		
		StringList strings = new StringList();
		
		strings.add("Hallo");
		strings.add("Welt");
		
		System.out.println(strings.get(0));
		System.out.println(strings.get(1));
		
		MyList<Integer> myList = new MyList<>();
	

	}

}
