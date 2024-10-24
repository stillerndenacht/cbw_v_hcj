package collections;

import java.util.Comparator;
import java.util.HashSet;
import java.util.LinkedHashSet;
import java.util.Set;
import java.util.TreeSet;

class LaengenComparator implements Comparator<Rechteck>{

	@Override
	public int compare(Rechteck o1, Rechteck o2) {
		// liefert 
//		 wert < 0, wenn o1 in der Sortierung vor o2 steht
//		 wert == 0, wenn o1 in der Sortierung an der gleichen Stelle wie o2 steht
//		 wert > 0, wenn o2 in der Sortierung vor o1 steht
		return (int)(o1.getLaenge() - o2.getLaenge());
	}
	
}


public class SetTest {
	public static void main(String[] args) {
		Set<Integer> ints = new TreeSet<>();
		
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
		
		Set<String> strings = new TreeSet<>();
		strings.add("Hallo");
		strings.add("Welt");
		strings.add("schöne");
		strings.add("Ferien");
		strings.add("Hans");
		strings.add("Willi");
		
		strings.forEach(System.out::println);
		
		System.out.println("\n===================================\n");
		
//		Set<Rechteck> rechtecke = new TreeSet<>( new LaengenComparator());
//		Set<Rechteck> rechtecke = new TreeSet<>( new Comparator<Rechteck>() {
//
//			@Override
//			public int compare(Rechteck o1, Rechteck o2) {
//				return (int) ((o1.getBreite() * o1.getLaenge()) - o2.getBreite()*o2.getLaenge());
//			}
//			
//		}  );
		
		Set<Rechteck> rechtecke = new TreeSet<>( (r1, r2) -> (int)(2*(r1.getBreite()+r1.getLaenge()) - 2*(r2.getBreite()+r2.getLaenge())));
		
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
