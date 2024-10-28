package minimals.threadthings;

public class RunableThings {
    public static void main(String[] args) throws InterruptedException {
        Addierer addierer = new Addierer();
        Thread addiererThread = new Thread(addierer);
        addiererThread.start();
        for (int i = 0; i < 20; ++i) {
            System.out.println("i : " + i);
            Thread.sleep(100);
        }
        addiererThread.join(); // wartet bis addiererThread dead ist oder eine Zeit die ich mitgebe abgelaufen ist
        System.out.println(addierer.getSumme());
    }
}
