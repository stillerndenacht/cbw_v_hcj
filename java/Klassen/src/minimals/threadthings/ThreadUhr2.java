package minimals.threadthings;

import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

//extends Thread ist nicht best practice aber funktioniert
public class ThreadUhr2 extends Thread {

    private boolean running = true;
    public int sleeptime;

    public ThreadUhr2(int sleeptime) {
        this.sleeptime = sleeptime;
    }

    @Override
    public void run() {
        LocalTime time = null;
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("HH:mm:ss:ms");
        String name = Thread.currentThread().getName();
        Long id = Thread.currentThread().getId();

        while (running) {
            time = LocalTime.now();
            System.out.println((name + " " + id + " sleeptime: " + sleeptime + " Uhrzeit: " + formatter.format(time)));
            System.out.println(name + " " + Thread.currentThread().getState());
            try {
                Thread.sleep(sleeptime);
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
