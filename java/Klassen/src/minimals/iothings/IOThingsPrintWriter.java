package minimals.iothings;
// die Pfade für die Dateien sind im CBW Rechner (Klassen/...)
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class IOThingsPrintWriter {
    public static void main(String[] args) {
        try {
            // PrintWriter out = new PrintWriter(new FileWriter("Klassen/src/minimals/iothings/textio5.txt"));
            PrintWriter out = new PrintWriter(new FileWriter("java/Klassen/src/minimals/iothings/textio5.txt"));
            out.println(345.67);
            out.println(true);
            out.println("Test");
            out.println('Y');
            out.printf("4.3 + 5.6 = %f%n", (4.3 + 5.6));
            out.close();

            // BufferedReader in = new BufferedReader(new FileReader("Klassen/src/minimals/iothings/textio5.txt"));
            BufferedReader in = new BufferedReader(new FileReader("java/Klassen/src/minimals/iothings/textio5.txt"));
            String zeile;
            while ((zeile = in.readLine()) != null) {
                System.out.println(zeile);
            }
            in.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
