package application;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.ListIterator;

public class ArrayListTest {

	public static void main(String[] args) {
		ArrayList<String> strings = new ArrayList<String>();
//		ArrayList<String> strings = new ArrayList<>(); // mit Diamond-Operator
		
		strings.add("Hallo");
		strings.add("Welt");
		strings.add("Test");
		
		for(String s : strings) {
			System.out.println(s);
		}
		System.out.println("\n===================================\n");
		
		strings.add(1, "Einfuegung");
		
		for(String s : strings) {
			System.out.println(s);
		}
		System.out.println("\n===================================\n");
		
		System.out.println(strings.size());
		
		String wort = strings.get(2);
		
		System.out.println(wort);
		System.out.println("\n===================================\n");
		String removed = strings.remove(1);
		System.out.println(removed);
		System.out.println("\n===================================\n");
		
		for(String s : strings) {
			System.out.println(s);
		}
		
		for(int index = 0; index < strings.size(); ++index) {
			System.out.println(strings.get(index));
		}
		
		System.out.println(strings.isEmpty());
		System.out.println(strings.indexOf("Hallo"));
		
		Iterator<String> it = strings.iterator();
		System.out.println("\n===================================\n");
		
		int indexX = 0;
		while(it.hasNext()) {
			String s = it.next();
			System.out.println(s);
//			strings.remove(0);		// unzulässige Veränderung
//			strings.add("new");  	// unzulässige Veränderung
//			strings.set(indexX, "changed");  // zulässige Veränderung
			++indexX;
//			it.remove(); 			// zulässige Veränderung
		}
		
		ListIterator<String> lit = strings.listIterator();
		
		while(lit.hasNext()) {
			int index = lit.nextIndex();
			String s = lit.next();
			
			System.out.println(index + ": " + s);
		}
		
		while(lit.hasPrevious()) {
			int index = lit.previousIndex();
			String s = lit.previous();
			
			System.out.println(index + ": " + s);
		}
		
	}

}
