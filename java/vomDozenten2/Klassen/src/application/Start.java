package application;

public class Start {

	public static void main(String[] args) throws InterruptedException {
		Rechteck r1;
		System.out.println("Anzahl Rechtecke: " + Rechteck.getAnzahlRechtecke());
		
		r1 = new Rechteck();
		System.out.println("Anzahl Rechtecke: " + Rechteck.getAnzahlRechtecke());

		r1.setBreite(12);
		r1.setLaenge(56);
		
		r1.print();
		
		Rechteck r2 = new Rechteck(102, 58, "Blau", "Gelb");
		System.out.println("Anzahl Rechtecke: " + Rechteck.getAnzahlRechtecke());
		r2.print();
		
		double l = r2.getLaenge();
		r1 = null;
		System.gc();
		System.out.println("Anzahl Rechtecke: " + Rechteck.getAnzahlRechtecke());
		Thread.sleep(15);
		System.out.println("Anzahl Rechtecke: " + Rechteck.getAnzahlRechtecke());
		
	}

}
