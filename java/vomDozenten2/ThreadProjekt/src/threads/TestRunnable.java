package threads;

public class TestRunnable {

	public static void main(String[] args) throws InterruptedException {
		Addierer addierer = new Addierer();
		Thread addiererThread = new Thread(addierer);
		addiererThread.start();
		

		for (int i = 0; i < 20; ++i) {
			System.out.println("Zaehler: " + i);
			Thread.sleep(100);
		}
		
		addiererThread.join();
		
		System.out.println(addierer.getSumme());
	}

}
