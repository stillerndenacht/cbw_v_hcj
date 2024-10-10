package enthuware;

public class Datentypen {

	public static void main(String[] args) {

		byte b = (byte) 320;
		System.out.println(b);
      char c;
      c = '0';
      c = 97;
      c = '\u0041';
      System.out.println(c);
      long l = 2_400_000_000L;
      float f = (float) 45.6;
       f = 45.6F;
       short s;
//       s = c;
      int i;
      c = 'a';//1
      System.out.println(c);
      i = c;  //2
      System.out.println(i);
      i++;    //3
      System.out.println(i);
      System.out.println((char) i);
      c = (char) i;  //4
      System.out.println(c);
      c++;    //5
      System.out.println(c);
   }

}
