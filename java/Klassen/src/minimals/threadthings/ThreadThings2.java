package minimals.threadthings;

public class ThreadThings2 {

    public static void main(String[] args) {

        ThreadUhr2 uhr1 = new ThreadUhr2(100);
        ThreadUhr2 uhr2 = new ThreadUhr2(100);
        ThreadUhr2 uhr3 = new ThreadUhr2(100);
        uhr1.setDaemon(true);
        uhr2.setDaemon(true);
        uhr3.setDaemon(true);

        //uhr1.setName("ThreadUhr"); //setzt den Name der bei getName() ausgegeben wird Default wäre er bspw. Thread-0
        uhr1.start(); // .start() ist die Methode die von java.Thread geerbt wird um den Thread zu starten
        uhr2.start();
        uhr3.start();

        int threadsleepg = 100;
        int threadsleepu = 100;

        for (int i = 0; i < 10; ++i) {
            System.out.println("\r\ni: " + i);
            if (i % 2 == 0) {

                try {

                    System.out.printf("\ngerade -- sleeps : %d ms---------\n", threadsleepg);
                    System.out.println(uhr1.getName() + " " + uhr1.getState());
                    System.out.println(uhr2.getName() + " " + uhr2.getState());
                    System.out.println(uhr3.getName() + " " + uhr3.getState());

                    Thread.sleep(threadsleepg);

                } catch (InterruptedException ex) {
                    ex.printStackTrace();
                }
            } else {
                try {

                    System.out.printf("\nungerade / / sleeps : %d ms / / / / /\n", threadsleepu);
                    System.out.println(uhr1.getName() + " " + uhr1.getState());
                    System.out.println(uhr2.getName() + " " + uhr2.getState());
                    System.out.println(uhr3.getName() + " " + uhr3.getState());

                    Thread.sleep(threadsleepu);
                } catch (InterruptedException ex) {
                    ex.printStackTrace();
                }
            }
        }
        //uhr1.interrupt();
        //uhr1.uhrAnhalten();
    }

}
