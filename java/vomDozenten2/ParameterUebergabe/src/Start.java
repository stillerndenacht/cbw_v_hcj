
public class Start {

	public static void main(String[] args) {
		int x = 9, y = 10;
		
		System.out.println("x: " + x + "\ty: " + y);
		swap(x, y);
		System.out.println("x: " + x + "\ty: " + y);
		
		Person p = new Person("Hans", 64);
		System.out.println(p);
		changePerson(p);
		System.out.println(p);
	}
	
	public static void swap(int a, int b) {
		System.out.println("a: " + a + "\tb: " + b);
		int temp = a;
		a = b;
		b =temp;
		System.out.println("a: " + a + "\tb: " + b);
	}
	
	public static void changePerson(Person pers) {
		pers.setAlter(50);
		pers = new Person("Willi", 36);
		pers.setAlter(12);
	}

}
