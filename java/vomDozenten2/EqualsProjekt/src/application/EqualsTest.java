package application;

public class EqualsTest {

	public static void main(String[] args) {
		int wert1 = 10;
		int wert2 = 10;
		
		System.out.println(wert1 == wert2);
		
		Rechteck r1 = new Rechteck(100, 200, "Black", "White");
		Rechteck r2 = new Rechteck(100, 200, "Black", "White");
		
		System.out.println(r1.equals(r2));
		
		System.out.println("\n===================================\n");

		String string1 = "Hallo";
		String string2 = "Hallo";
		String string3 = new String("Hallo");
		String string4 = new String("Hallo");
		
		System.out.println(string1 == string2); // true
		System.out.println(string1 == string3); // false
		System.out.println(string3.equals(string4)); // true
		
		Integer int127_1 = new Integer(127);
		Integer int127_2 = new Integer(127);
		Integer int127_3 = Integer.valueOf(128);
				
		Integer int127_4 = Integer.valueOf(128);
		
		System.out.println(int127_1 == int127_2);
		System.out.println(int127_3 == int127_4);
		

	}

}
