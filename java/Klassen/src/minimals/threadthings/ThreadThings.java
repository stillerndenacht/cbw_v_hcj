package minimals.threadthings;

public class ThreadThings {

    public static void main(String[] args) {

        ThreadUhr uhr1 = new ThreadUhr();
        uhr1.setDaemon(true);
    
        //uhr1.setName("ThreadUhr"); //setzt den Name der bei getName() ausgegeben wird Default wäre er bspw. Thread-0
        uhr1.start(); // .start() ist die Methode die von java.Thread geerbt wird um den Thread zu starten
        
        for (int i = 0; i < 30; ++i) {
            System.out.println("i: " + i);
            
            try {
                Thread.sleep(100);
            } catch (InterruptedException ex) {
                ex.printStackTrace();
            }
        }
        //uhr1.interrupt();
        //uhr1.uhrAnhalten();
    }

}
