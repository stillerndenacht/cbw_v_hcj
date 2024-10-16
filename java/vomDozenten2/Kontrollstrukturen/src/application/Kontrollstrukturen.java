package application;

public class Kontrollstrukturen {
	private static int j;

	public static void main(String[] args) {

		int zahl = 2;
		int z = 2;
		int i;

		System.out.println("j: " + j);

		final int x = 7;

//		x = 10;

		zahl = 34;

//		x = 7;
		switch (zahl) {

		case 0:
			System.out.println(0);
			break;
		case 1:
			System.out.println(1);
			break;
		default:
			System.out.println("default");
			break;
		case 2:
			System.out.println(2);
			break;
		case x:
			System.out.println(x);
			break;

		}

		switch (zahl) {

		}

		switch (zahl) {

		case 0:
			System.out.println(0);
			break;
		case 1:
			System.out.println(1);
			break;

		case 2:
			System.out.println(2);
			break;
		case x:
			System.out.println(x);
			break;

		}

		switch (zahl) {

		default:
			System.out.println("default");
			break;

		}
		
		boolean flag = false;
		
	switch(zahl) {
		
//			flag = true;
//			System.out.println(x);
			
		
		}
	
	
	
	double erg = 5.9 % 2.7;
	
	System.out.println(erg);

	System.out.println(true && false);
//	System.out.println(4 && 7);
	
	z += 5;  // z = z + 5;
	String text = "Hallo ";
	text += "Welt"; // text = text + "Welt";
	
	System.out.println(text);
	


int h = 10;
//System.out.println( h<20 ? out1() : out2() );
	if(z < erg) 
			System.out.println(z < erg);
			System.out.println("Hallo");

			
			for(int index = 0; index < 3; ++index)
				System.out.println(index);
				System.out.println("jaskdsakjd");
	}

	public static void out1() {}
	public static void out2() {}
}
