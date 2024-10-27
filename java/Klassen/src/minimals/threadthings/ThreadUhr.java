package minimals.threadthings;

import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

//extends Thread ist nicht best practice aber funktioniert
public class ThreadUhr extends Thread {

    private boolean running = true;

    @Override
    public void run() {
        LocalTime time = null;
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("HH:mm:ss:ms");
        String name = Thread.currentThread().getName();
        Long id = Thread.currentThread().getId();

        while (running) {
            time = LocalTime.now();
            System.out.println((name +" " + id + " Uhrzeit: " + formatter.format(time)));
            try {
                Thread.sleep(410);
            } catch (InterruptedException ex) {
                //ex.printStackTrace();
                System.out.println("Uhr stop at: " + formatter.format(time));
                return;
            }
        }
    }

    public void uhrAnhalten() {
        running = false;
    }
}
