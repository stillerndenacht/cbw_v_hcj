package threadsicherheit;

public class Reader extends Thread{
	private Datenstruktur datenstruktur;

	public Reader(Datenstruktur datenstruktur) {
		super();
		this.datenstruktur = datenstruktur;
	}

	@Override
	public void run() {
		int zahl = 0;
		
		while ((zahl = datenstruktur.read()) != -1) {
			System.out.println("Zahl gelesen: " + zahl);
			try {
				Thread.sleep(15);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
	}
	
	

}
