package minimals.threadthings;

public class ThreadSicher {
    public static void main(String[] args) {
        DatenStruktur datenStruktur = new DatenStruktur();
        Writer writer = new Writer(datenStruktur);
        Reader reader = new Reader(datenStruktur);
        writer.start();
        reader.start();
    }

}
