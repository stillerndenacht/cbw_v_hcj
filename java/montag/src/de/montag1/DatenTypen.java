package de.montag1;

public class DatenTypen {
    public static void main(String[] args) {
        System.out.println("What the Hell World??");

        // primitive DatenTypen
        byte b; // definiert b als Variable vom Type byte
        short s;
        int i;
        long l;
        float f;
        double d;
        char c;
        boolean bool;

        i = 42; // gibt i einen Wert, dabei werden 2 Speicherbereiche belegt und miteinander
                // verknüpft
        l = i;

        System.out.println(i);
        System.out.println(l);

        i = 84;

        System.out.println(i);
        System.out.println(l);

        double dd = 3.14;
        float ff = 4.14f;
        float fff = 1000000000;
        long ll = 1000000000;
        long lll = 10000000000l;
        
        // long llll = 10_000_000_000_000_000_000l;
        System.out.println("das double dd : " + dd + "\ndas float ff : " + ff + "\ndas float fff : " + fff
                + "\nlong ll : " + ll + "\nlong lll :" + lll);

        System.out.println("\n--------------\n");
        System.out.println("Fallstricke der primitiven Datentypen und ihres Speicherformats");
        System.out.println(Integer.MAX_VALUE); // 2147483647
        System.out.println(Integer.MAX_VALUE + 1); // -2147483648 führt zum Überlauf wodurch das Vorzeichen-bit geändert
                                                   // wird
        System.out.println(Integer.MIN_VALUE); // -2147483648
        System.out.println(Integer.MIN_VALUE - 1); // 2147483647
        System.out.println("\n--------------\n");

        System.out.println("Casting : Widening cast");

        // byte (1byte) -> short (2byte) -> int (4byte) -> long (8byte)

        byte b1 = 25; // das passt in ein byte
        short s1 = b1;
        int i1 = s1;
        long l1 = i1;

        // int i2 = l1; // das geht aber nicht zurück, weil die Speichergröße eines long
        // größer ist als die eines int
        // Narrowing geht nur explizit
        int i2 = (int) l1;
        System.out.println("\n--------------\n");
        System.out.println("char kann sowohl als Zeichen als auch als Codepoint angegeben werden");
        char aa = 'A';
        char aaa = 65;
        System.out.println("char aa : " + aa + "\nchar aaa :" + aaa);
        System.out.println("\n--------------\n");

        // nicht-primitive DatenTypen
        String str = "Ich bin ein String"; // ein String ist ein Objekt vom Typ String
        System.out.println(str);

        System.out.println(str.length());
        System.out.println(str.toUpperCase());
        System.out.println(str.toLowerCase());

        String strDouble = str + " - " + str.toUpperCase();
        System.out.println(strDouble);

        String escape = "Backspace \\b \b , Newline \\n \n , Tab \\t \t , Carriage Return \\r \r what will happen? what will happen?2";
        System.out.println(escape);

    }
}
