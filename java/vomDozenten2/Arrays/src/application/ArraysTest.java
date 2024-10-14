package application;

import java.util.Arrays;

public class ArraysTest {

	public static void main(String[] args) {
		int intArray1[] = new int[5];
		
		for(int index = 0; index < intArray1.length; ++index) {
			intArray1[index] = (int) (Math.random() * 100) + 1;
		}
		
		for(int zahl : intArray1) {
			System.out.print(zahl + "\t");
		}
		
		System.out.println("\n===================================\n");
		
		Arrays.sort(intArray1);
		
		for(int zahl : intArray1) {
			System.out.print(zahl + "\t");
		}
		
		System.out.println("\n===================================\n");
		
		char[] zeichen = new char[26];
		
		for ( int index = 0; index < zeichen.length; ++index) {
			zeichen[index] = (char)(Math.random() * 56 + 65);
		}
		for(char zahl : zeichen) {
			System.out.print(zahl + "\t");
		}
		
		Arrays.sort(zeichen);
		
		System.out.println();
		for(char zahl : zeichen) {
			System.out.print(zahl + "\t");
		}
		System.out.println();
		System.out.println("\n===================================\n");
		
		int[] intArray1Copy =Arrays.copyOf(intArray1, intArray1.length*2);
		
		for(int zahl : intArray1) {
			System.out.print(zahl + "\t");
		}
		System.out.println();
		
		for(int zahl : intArray1Copy) {
			System.out.print(zahl + "\t");
		}

	}

}
