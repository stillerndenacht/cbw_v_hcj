package math;

import java.util.Random;

public class RandomTest {

	public static void main(String[] args) {
		Random rand = new Random(-10);
		
		int value = 0;
		
		for(int i = 1; i < 20; ++i) {
			value = rand.nextInt();
			System.out.printf("%d\n", value);
		}

		System.out.println("\n===================================\n");
		
		rand.setSeed(-10);
		
		for(int i = 1; i < 20; ++i) {
			value = rand.nextInt();
			System.out.printf("%d\n", value);
		}

	}

}
