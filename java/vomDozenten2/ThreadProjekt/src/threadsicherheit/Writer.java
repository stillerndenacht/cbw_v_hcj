package threadsicherheit;

public class Writer extends Thread{
	
	private Datenstruktur datenstruktur;

	public Writer(Datenstruktur datenstruktur) {
		super();
		this.datenstruktur = datenstruktur;
	}
	
	@Override
	public void run() {
		for(int zahl = 1; zahl < 101; ++zahl) {
			datenstruktur.write(zahl);
			System.out.println("Zahl geschrieben: " + zahl);
			try {
				Thread.sleep(15);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		datenstruktur.write(-1);
	}

}
