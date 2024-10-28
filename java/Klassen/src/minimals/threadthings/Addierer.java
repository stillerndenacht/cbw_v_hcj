package minimals.threadthings;

public class Addierer implements Runnable {
    private int summe = 0;

    @Override
    public void run() {
        for (int zahl = 1; zahl < 1000; ++zahl) {
            summe += zahl;
            try {
                Thread.sleep(20);
            } catch (InterruptedException ex) {
                ex.printStackTrace();
            }
        }

        System.out.println("Summe in Runable : " + summe);
    }

    public int getSumme() {
        return summe;
    }

}
