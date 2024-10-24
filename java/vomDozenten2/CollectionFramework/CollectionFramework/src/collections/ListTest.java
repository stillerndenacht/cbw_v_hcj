package collections;

import java.util.ArrayList;
import java.util.List;

public class ListTest {

	public static void main(String[] args) {
		List<Integer> ints = new ArrayList<>();
		
		ints.add(50);
		ints.add(80);
		ints.add(-23);
		boolean ok = ints.add(23);
		System.out.println(ok);
		ok = ints.add(23);
		System.out.println(ok);
		ints.add(23);
		ints.add(45);
		ints.add(30);
		ints.add(122);
		
		
		
//		ints.trimToSize();
		
		ints.forEach(System.out::println);
//		for(int i : ints) System.out.println(i);
		System.out.println("\n===================================\n");
		
List<Rechteck> rechtecke = new ArrayList<>();
		
		rechtecke.add(new Rechteck(23, 56, "Black", "White"));
		rechtecke.add(new Rechteck(45, 12, "Black", "White"));
		rechtecke.add(new Rechteck(245, 78, "Black", "White"));
		rechtecke.add(new Rechteck(256, 23, "Black", "White"));
		rechtecke.add(new Rechteck(56, 56, "Black", "White"));
		rechtecke.add(new Rechteck(7, 12, "Black", "White"));
		rechtecke.add(new Rechteck(233, 78, "Black", "White"));
		rechtecke.add(new Rechteck(89, 98, "Black", "White"));
		
		rechtecke.forEach(System.out::println);

	}

}
