package application;

public class WrapperTest {

	public static void main(String[] args) {
		Integer integer = new Integer(45);

		int i = integer.intValue();
		int i2 = 7;
		Integer integer2 = Integer.valueOf(i2);
		
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
		

	}

}
