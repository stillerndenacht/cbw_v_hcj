package application;

public class ZweitdimensionaleArrays {
	
	public static void main(String[] args) {
		// zweidimensional
		int[][] array1 = new int[3][5];
		int array2[][] = new int[3][5];
		int[] array3[] = new int[3][5];
		
		int[][] asymetrisch = new int[4][];
		
		for(Object z : asymetrisch) {
			System.out.println(z);
		}
		
		for(int index = 0; index < asymetrisch.length; ++ index) {
			asymetrisch[index] = new int[(int) (Math.random() * 10 + 1)];
		}
		
		for(int index1 = 0; index1 < asymetrisch.length; ++index1) {
			for(int index2 = 0; index2 < asymetrisch[index1].length; ++index2) {
				asymetrisch[index1][index2] = (int)(Math.random() * 100 + 1);
			}
		}
		
		for(int[] zeile  : asymetrisch) {
			for(int zahl : zeile) {
				System.out.print(zahl + "\t");
			}
			System.out.println();
		}
		
		System.out.println("\n===================================\n");
		
		array1[0][2] = 45;
		
		// dreidimensional
		int[][][] array4 = new int[3][2][2];
		int[][] array5[] = new int[3][2][2];
		int[] array6[][] = new int[3][2][2];
		int array7[][][] = new int[3][2][2];
		
		
		for(int index1 = 0; index1 < array1.length; ++index1) {
			for(int index2 = 0; index2 < array1[index1].length; ++index2) {
				array1[index1][index2] = (int)(Math.random() * 100 + 1);
			}
		}
		
		
		
		for(int[] zeile  : array1) {
			for(int zahl : zeile) {
				System.out.print(zahl + "\t");
			}
			System.out.println();
		}
		
		int[][] array8 = {{2, 5, 7, 6, 9}, {1, 8, 4}, {45, 78}, {23}};		
		int[][][] array9 = {{{2, 5, 7, 6, 9}, {1, 8, 4}}, {{45, 78}, {23}}};	
		
//		System.out.println(array9[1][2][1]);
	}

}