package minimals.iothings;
// die Pfade für die Dateien sind im CBW Rechner (Klassen/...)
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;

public class IOThingsDataInOutStream {
    public static void main(String[] args)

    {
        try {
            // DataOutputStream out = new DataOutputStream(new FileOutputStream("Klassen/src/minimals/iothings/datei2.exe"));
            DataOutputStream out = new DataOutputStream(new FileOutputStream("java/Klassen/src/minimals/iothings/datei2.exe"));

            out.writeDouble(23.57);
            out.writeUTF("Hallo Welt");
            out.writeInt(69);
            out.writeBoolean(true);
            out.writeChar('A');
            out.close();

            // DataInputStream in = new DataInputStream(new FileInputStream("Klassen/src/minimals/iothings/datei2.exe"));
            DataInputStream in = new DataInputStream(new FileInputStream("java/Klassen/src/minimals/iothings/datei2.exe"));
            // es ist wichtig genau zu wissen, welcher Datentyp da geschrieben wurde und in der richtigen Reihenfolge auszulesen, sonst funktioniert es nicht...
            double d = in.readDouble();
            String text = in.readUTF();
            int i = in.readInt();
            boolean ok = in.readBoolean();
            char ch = in.readChar();
            in.close();

            System.out.println(d);
            System.out.println(text);
            System.out.println(i);
            System.out.println(ok);
            System.out.println(ch);

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
