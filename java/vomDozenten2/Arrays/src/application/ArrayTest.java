package application;

public class ArrayTest {

	public static void main(String[] args) {
		int x;
		int feld[], test;
		test = 7;
		
		feld = new int[0];
		
		int intArray1[] = new int[5];
		
		for(int zahl : intArray1) {
			System.out.println(zahl);
			zahl = 10;
		}
		
		System.out.println("intArray1[intArray1.length]: " + intArray1[intArray1.length]);
		
		for(int index = 0; index < intArray1.length; ++index) {
			intArray1[index] = (int) (Math.random() * 100) + 1;
		}
		
		for(int zahl : intArray1) {
			System.out.println(zahl);
		}
		
		Rechteck[] rechtecke = new Rechteck[5];
		for(int index = 0; index < rechtecke.length; ++index) {
			rechtecke[index] = new Rechteck(Math.random() * 200, Math.random() * 100);
		}
		
		for(Rechteck r : rechtecke) {
			System.out.println(r);
		}
		
		int[] intArray2 = {23, 56, 78, 34, 100};
		int[] intArray3 = new int[]{23, 56, 78, 34, 100};
		
		for(int z : intArray2) {
			System.out.print(z + "\t");
		}
		System.out.println();
		for(int z : intArray3) {
			System.out.print(z + "\t");
		}
		
		Rechteck[] rechtecke2 = {new Rechteck(), new Rechteck(3, 7)};
		Rechteck[] rechtecke3 = new Rechteck[] {new Rechteck(), new Rechteck(3, 7)};
		for(Rechteck r : rechtecke2) {
			System.out.println(r);
		}
		
		for(Rechteck r : rechtecke3) {
			System.out.println(r);
		}
	}

}
