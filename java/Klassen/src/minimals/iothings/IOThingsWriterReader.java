package minimals.iothings;
// die Pfade für die Dateien sind im CBW Rechner (Klassen/...)
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class IOThingsWriterReader {
    public static void main(String[] args) {
        try {
            // FileWriter out = new FileWriter("Klassen/src/minimals/iothings/textio.txt");
            FileWriter out = new FileWriter("java/Klassen/src/minimals/iothings/textio.txt");
            out.write("Hallo");
            out.write('\n');
            out.write(" Welt");
            // out.flush(); // Erzwingt das Schreiben des Puffers
            out.close(); // schreibt den Puffer und schließt die Datei

            // FileReader in = new FileReader("Klassen/src/minimals/iothings/textio.txt");
            FileReader in = new FileReader("java/Klassen/src/minimals/iothings/textio.txt");
            int zeichen;
            // das -1 ist die Ausgabe bei einem leer-read
            while ((zeichen = in.read()) != -1) {
                System.out.print((char) zeichen);
            }
            in.close();

            // FileWriter copy = new FileWriter("Klassen/src/minimals/iothings/textio2.txt");
            FileWriter copy = new FileWriter("java/Klassen/src/minimals/iothings/textio2.txt");
            // in = new FileReader("Klassen/src/minimals/iothings/textio.txt");
            in = new FileReader("java/Klassen/src/minimals/iothings/textio.txt");
            char[] buffer = new char[2];
            int anzahl;
            // das -1 ist die Ausgabe bei einem leer-read
            while ((anzahl = in.read(buffer)) != -1) {
                copy.write(buffer, 0, anzahl);
            }
            in.close();
            copy.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
