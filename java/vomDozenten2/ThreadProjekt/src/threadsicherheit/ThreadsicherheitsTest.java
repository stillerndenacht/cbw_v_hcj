package threadsicherheit;

public class ThreadsicherheitsTest {

	public static void main(String[] args) {
		Datenstruktur datenstruktur = new Datenstruktur();
		Writer writer = new Writer(datenstruktur);
		Reader reader = new Reader(datenstruktur);
		writer.start();
		reader.start();
	}

}
