
public class Taschenrechner {

    private int zahl1;  //Deklaration
    private int zahl2;

    public int ergebnis;

    public Taschenrechner(int zahl1, int zahl2) {
        this.zahl1 = zahl1; //Initialisierung
        this.zahl2 = zahl2;
    }

    public void setNeueZahl1(int zahl1) {
        this.zahl1 = zahl1;
    }

    public void setNeueZahl2(int zahl2) {
        this.zahl2 = zahl2;
    }

    public int addieren() {
        ergebnis = zahl1 + zahl2;
        return ergebnis;
    }

    public int subtrahieren() {
        ergebnis = zahl1 - zahl2;
        return ergebnis;
    }

    public int multiplizieren() {
        ergebnis = zahl1 * zahl2;
        return ergebnis;
    }

    public int dividieren() {
        ergebnis = zahl1 / zahl2;
        return ergebnis;
    }

    public int getLetztesErgebnis() {
        return ergebnis;
    }

    public String getErgebnisAlsNachricht() {
        String ergebnisNachricht = erstelleErgebnisNachricht(ergebnis);
        return ergebnisNachricht;
    }

    public String testeTaschenrechnerAufFunktion() {
        return "Hallo Taschenrechner, Du funktionierst!";
    }

    public boolean isErgebnisNull() {
        if (ergebnis == 0) {
            return false;
        } else {
            return true;
        }
    }

    private String erstelleErgebnisNachricht(int zahl) {
        return "Dein Ergebnis ist: " + zahl;
    }
}
