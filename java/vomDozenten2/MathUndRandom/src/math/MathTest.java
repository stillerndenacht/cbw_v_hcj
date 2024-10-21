package math;

public class MathTest {

	public static void main(String[] args) {
		double value;
		for(int i = 1; i < 20; ++i) {
			value = Math.random();
			System.out.println(value + "  ");
		}
		System.out.println();
		System.out.println("\n===================================\n");

		int OBER_GRENZE = 20;
		int UNTER_GRENZE = 1;
		
		for(int i = 1; i < 20; ++i) {
			value = Math.random() * OBER_GRENZE + UNTER_GRENZE;
			double value2 = Math.round(value);
			System.out.println(value + " => " + value2);
		}
		System.out.println();
		System.out.println("\n===================================\n");
		
		System.out.println(Math.nextAfter(2.1, 2.5));
		
	}

}
