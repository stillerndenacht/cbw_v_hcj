package threads;

public class Addierer implements Runnable{
	private int summe = 0;

	@Override
	public void run() {
		for(int zahl = 1; zahl < 1000; ++zahl) {
			summe += zahl;
			try {
				Thread.sleep(20);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
		
		System.out.println("Summe in Runnable: " + summe);
		
	}

	public int getSumme() {
		return summe;
	}

}
