package minimals.threadthings;

public class DatenStruktur {
    private int[] feld = new int[5];
    private int index = 0;
    
// Monitor mit synchronised 
    public synchronized void write(int wert) {
        feld[index] = wert;
        ++index;
    }

    public synchronized int read() {
        int temp = feld[0];
        for (int i = 0; i < index - 2; ++i) {
            feld[i] = feld[i + 1];
        }
        --index;
        return temp;
    }

    // public void write(int wert) {
    //     feld[index] = wert;
    //     ++index;
    // }

    // public int read() {
    //     int temp = feld[0];
    //     for (int i = 0; i < index - 2; ++i) {
    //         feld[i] = feld[i + 1];
    //     }
    //     --index;
    //     return temp;
    // }
}
