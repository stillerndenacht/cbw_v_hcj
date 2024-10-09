package application;

public class TernaererOperator {

	public static void main(String[] args) {
		
		int a = 5, b = 7;
		
		int erg;
		
		// (boolscher Operand) ? Rückgabewert wenn boolscher Operand == true : Rückgabewert wenn boolscher Operand == false
		
		erg = a > b ? a : b;
		
		System.out.println(erg);
		
		String text = a > b ? "a groesser b" : "a kleiner b"; 
		
		System.out.println(text);
		
		
	}

}
