package threads;

import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

public class UhrenThread extends Thread{
	private boolean running = true;

	@Override
	public void run() {
		LocalTime time = null;
		DateTimeFormatter formatter = DateTimeFormatter.ofPattern("HH:mm:ss");
		String name = Thread.currentThread().getName();
		
		while(running) {
			time = LocalTime.now();
			System.out.println(name + " Uhrzeit: " + formatter.format(time));
			try {
				Thread.sleep(1000);
			} catch (InterruptedException e) {
				return;
			}
		}
	}
	
	public void uhrAnhalten() {
		running = false;
	}
}
