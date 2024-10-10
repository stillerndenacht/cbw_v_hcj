package application;

public class Start {

	public static void main(String[] args) {
		int intErgebnis = add(34, 67);
		System.out.println(intErgebnis);
		long longErgebnis = add(34L, 67L);
		System.out.println(longErgebnis);
		
		longErgebnis = add(34L, 67);
		System.out.println(longErgebnis);
		
		longErgebnis = add(34, 67L);
		System.out.println(longErgebnis);

	}
	
	public static int add(int zahl1, int zahl2) {
		return zahl1 + zahl2;
	}
//	public int add(int zahl1, int zahl2) {
//		return zahl1 + zahl2;
//	}

//	public static int add(int zahl1, int zahl2) {
//		return zahl1 - zahl2;
//	}
	
	public static void add(int zahl1, int zahl2, int zahl3) {
//		return zahl1 + zahl2 + zahl3;
	}
	
	
	public static long add(long zahl1, long zahl2) {
		return zahl1 + zahl2;
	}

	public static long add(long zahl1, int zahl2) {
		return zahl1 + zahl2;
	}
	
	public static long add(int zahl1, long zahl2) {
		return zahl1 + zahl2;
	}

}
