package threadsicherheit;

public class Datenstruktur2 {

	private int[] feld = new int[5];
	private int index = 0;
	private Object monitor = new Object();

	public void write(int wert) {
		synchronized (monitor) {

			feld[index] = wert;
			++index;
		}
	}

	public int read() {
		synchronized (monitor) {
			int temp = feld[0];
			for (int i = 0; i < index - 2; ++i) {
				feld[i] = feld[i + 1];
			}

			--index;

			return temp;
		}
	}
}
