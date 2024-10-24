package application;

public class CastTest {

	public static void main(String[] args) {
		Basis basis = new Basis();
		Abgeleitet1 a = new Abgeleitet1();
		Abgeleitet2 b = new Abgeleitet2();
		Abgeleitet1 refA;
		Abgeleitet2 refB;
		Object obj = basis;
		
		basis = a;
		refA = (Abgeleitet1) obj;
		

	}

}
