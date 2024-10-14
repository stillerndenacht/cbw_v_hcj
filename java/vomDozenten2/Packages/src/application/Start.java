package application;

//import com.sun.utilities.*;
//import com.sun.utilities.*;


public class Start {

	public static void main(String[] args) {
		com.sun.utilities.Utility utility1 = new com.sun.utilities.Utility();
		utility1.test();
		
		com.ibm.utilities.Utility utility2 = new com.ibm.utilities.Utility();
		utility2.test();
		
		A aObject = new A();
		
		System.out.println("A.a: " + aObject.a);
		System.out.println("A.b: " + aObject.b);
		System.out.println("A.c: " + aObject.c);
		System.out.println("A.d: " + aObject.d);

	}

}



// Top-Level Class mit default-Zugriff nur aus dem selben Package
class Test{
	
}
