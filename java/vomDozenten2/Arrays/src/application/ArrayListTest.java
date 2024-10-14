package application;

import java.util.ArrayList;

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
		
		System.out.println(strings.isEmpty());
		System.out.println(strings.indexOf("Hallo"));
	}

}
