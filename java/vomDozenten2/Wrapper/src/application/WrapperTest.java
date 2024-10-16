package application;

public class WrapperTest {

	public static void main(String[] args) {
		Integer integer = new Integer(45);

		int i = integer.intValue();
		int i2 = 7;
		Integer integer2 = Integer.valueOf(i2);
		
		int i3 = integer;
		Integer integer3 = i3;
		
		System.out.println(i3);
		
		
		for (String s : args) {
			System.out.println(s);
		}
		
		System.out.println(args[0] + args[1]);
		System.out.println(args.length);
		
		int arg1 = Integer.parseInt(args[0]);
		int arg2 = Integer.parseInt(args[1]);
		
		System.out.println(arg1 + arg2);
		
		System.out.println(args[0] + " + " + args[1] + " = " + (arg1 + arg2));
		
		System.out.println("\n===================================\n");
		
		Integer int127_1 = new Integer(127);
		Integer int127_2 = new Integer(127);
		Integer int127_3 = Integer.valueOf(128);
				
		Integer int127_4 = Integer.valueOf(128);
		
		System.out.println(int127_1 == int127_2);
		System.out.println(int127_3 == int127_4);
		System.out.println("\n===================================\n");
		toInteger(23);
		toInteger(integer3);
		toInt(23);
		toInt(integer3);
		
		toDoubleObject(2.1);
		toDoubleObject(Double.valueOf(4.5));
		toDouble(2.1);
		toDouble(Double.valueOf(4.5));
//		toDoubleObject(78); // funktioniert nicht, da widening und anschließendes autoboxing nicht funktioniert
		
		System.out.println("\n===================================\n");
		
		Integer a = -128*5;
		Integer b =  128*5;
		System.out.println(a.byteValue() == b.byteValue());
		System.out.println(a == b);
		System.out.println(Integer.toBinaryString(a));
		System.out.println(Integer.toBinaryString(b));

	}
	
	public static void toInteger(Integer integerParam) {
		System.out.println(integerParam);
	}
	public static void toInt(int intParam) {
		System.out.println(intParam);
	}
	
	public static void toDoubleObject(Double doubleParam) {
		System.out.println(doubleParam);
	}

	public static void toDouble(double doubleParam) {
		System.out.println(doubleParam);
	}

}
