package minimals.iothings;
// die Pfade für die Dateien sind im CBW Rechner (Klassen/...)
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class IOThingsBufferedWriRea {

    public static void main(String[] args) {
        try {
            // BufferedWriter out = new BufferedWriter(new FileWriter("Klassen/src/minimals/iothings/textio3.txt"));
            BufferedWriter out = new BufferedWriter(new FileWriter("java/Klassen/src/minimals/iothings/textio3.txt"));
            out.write("Hallo");
            out.write('\n');
            out.write(" Welt");

            out.close();

            // BufferedReader in = new BufferedReader(new FileReader("Klassen/src/minimals/iothings/textio3.txt"));
            BufferedReader in = new BufferedReader(new FileReader("java/Klassen/src/minimals/iothings/textio3.txt"));
            String zeile;
            while ((zeile = in.readLine()) != null) {
                System.out.println(zeile);
            }
            in.close();
            
            // FileWriter copy = new FileWriter("Klassen/src/minimals/iothings/textio4.txt");
            FileWriter copy = new FileWriter("java/Klassen/src/minimals/iothings/textio4.txt");
            // in = new BufferedReader(new FileReader("java/Klassen/src/minimals/iothings/textio3.txt"));
            in = new BufferedReader(new FileReader("java/Klassen/src/minimals/iothings/textio3.txt"));

            while ((zeile = in.readLine()) != null) {
                copy.write(zeile);
                copy.write("\n");
            }
            in.close();
            copy.close();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
