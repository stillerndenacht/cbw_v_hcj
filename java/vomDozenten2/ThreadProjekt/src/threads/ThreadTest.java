package threads;

public class ThreadTest {

	public static void main(String[] args) throws InterruptedException {
		
		UhrenThread uhr1 = new UhrenThread();
		uhr1.setDaemon(true);
		uhr1.setName("UhrenThread");
		uhr1.setPriority(10);
		uhr1.start();
		System.out.println(uhr1.getId());
		System.out.println(uhr1.getThreadGroup());
		System.out.println(Thread.currentThread().getThreadGroup());
		
		System.out.println(uhr1.threadId());
//		Thread.sleep(121);
		for(int i = 0; i < 20; ++i) {
			System.out.println("i: " + i);
//			if(i == 10) uhr1.interrupt();
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
