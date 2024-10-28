package minimals.threadthings;

public class DatenStruktur2 {
    private int[] feld = new int[5];
    private int index = 0;
    
// mit Monitor-Object und synchronised Block
    private Object monitor = new Object();

    public void write(int wert) {
        synchronized (monitor) {

            feld[index] = wert;
            ++index;
        }
    }

    public int read() {
        synchronized (monitor) {

            int temp = feld[0];
            for (int i = 0; i < index - 2; ++i) {
                feld[i] = feld[i + 1];
            }
            --index;
            return temp;
        }
    }
    
    // mit synchronised Block...
    // public void write(int wert) {
    //     synchronized (this) {

    //         feld[index] = wert;
    //         ++index;
    //     }
    // }

    // public int read() {
    //     synchronized (this) {

    //         int temp = feld[0];
    //         for (int i = 0; i < index - 2; ++i) {
    //             feld[i] = feld[i + 1];
    //         }
    //         --index;
    //         return temp;
    //     }
    // }

    
}
