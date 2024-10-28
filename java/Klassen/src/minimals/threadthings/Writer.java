package minimals.threadthings;

public class Writer {
private DatenStruktur datenStruktur;
public Writer(DatenStruktur datenStruktur){super();
this.datenStruktur = datenStruktur;}

public void run(){
    for (int zahl = 1; zahl < 101; ++zahl){
        datenStruktur.write(zahl);
        System.out.println("Zahl geschrieben :"+zahl);
        try {
            Thread.sleep(15);
        } catch (InterruptedException ex) {
            ex.printStackTrace();
        }
    }
    datenStruktur.write(-1);
}
}
