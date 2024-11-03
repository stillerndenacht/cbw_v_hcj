package threadsicherheit;

public class Datenstruktur {
	private int[] feld = new int[5];
	private int index = 0;
	
	public synchronized void write(int wert) {
		while(index == feld.length) {
			try {
				this.wait(200);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		feld[index] = wert;
		++index;
		if(index == 1) {
			this.notifyAll();
		}
	}
	
	public synchronized int read() {
		while(index == 0) {
			try {
				this.wait();
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		int temp = feld[0];
		for (int i = 0; i < index-2; ++i) {
			feld[i] = feld[i+1];
		}
		
		--index;
		if(index == feld.length-1) {
			this.notifyAll();
		}
		
		return temp;
	}

}
