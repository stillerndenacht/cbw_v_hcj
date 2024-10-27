package minimals.iothings;
// die Pfade für die Dateien sind im CBW Rechner (Klassen/...)
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;

public class IOThingsFileInOutStream {
    public static void main(String[] args)

    {
        try {
            // FileInputStream in = new FileInputStream("java/Klassen/src/minimals/iothings/datei.exe");
            FileInputStream in = new FileInputStream("java/Klassen/src/minimals/iothings/datei.exe"); // die gibt es noch nicht!!
            // FileOutputStream out = new FileOutputStream("java/Klassen/src/minimals/iothings/copy of datei.exe");
            FileOutputStream out = new FileOutputStream("java/Klassen/src/minimals/iothings/copy of datei.exe");
            byte[] buffer = new byte[1024];
            int anzahl;
            while ((anzahl = in.read(buffer)) != -1) {
                out.write(buffer, 0, anzahl);

            }
            in.close();
            out.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

}
