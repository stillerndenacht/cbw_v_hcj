package threads;

public class ThreadTest {

	public static void main(String[] args) {
		
		UhrenThread uhr1 = new UhrenThread();
		uhr1.setDaemon(true);
		uhr1.setName("UhrenThread");
		uhr1.start();
		
		for(int i = 0; i < 20; ++i) {
			System.out.println("i: " + i);
			try {
				Thread.sleep(500);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		
//		uhr1.interrupt();
//		uhr1.uhrAnhalten();
	}

}
