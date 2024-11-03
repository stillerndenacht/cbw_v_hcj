package minimals.threadthings;

public class Reader extends Thread {
    private DatenStruktur datenStruktur;

    public Reader(DatenStruktur datenStruktur) {
        super();
        this.datenStruktur = datenStruktur;
    }

public void run(){
    int zahl = 0;
    while ((zahl = datenStruktur.read()) != 0;){
        
    }
}
}
