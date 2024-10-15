package equalsthings;

public class EqualsThings {
    @SuppressWarnings("removal")
    public static void main(String[] args) {

        System.out.println("\n-------- String Equals --------\n");
        String str1 = "Hallo";
        String str2 = "Hallo";
        String str3 = new String("Hallo");
        String str4 = new String("Hallo");

        System.out.println(str1 == str2); // true (da Hallo schon im Stringpool liegt, wird es für str2 mit verwendet)
        System.out.println(str1 == str3); // false (durch new String wird das Hallo von str3 als neuer String in den
                                          // Pool gelegt)
        System.out.println(str1.equals(str3)); // true (hier wird nur der Inhalt angelegt)
        System.out.println(str3 == str4); // false
        System.out.println(str3.equals(str4)); // true

        System.out.println("\n-------- Integer Equals --------\n");

        // zwischen -128 und 127 werden int-Werte wie byte-Werte verarbeitet
        Integer intn = 127;
        Integer intm = 127;

        Integer into = 128;
        Integer intp = 128;

        System.out.println("127 == 127 : " + (intn == intm));// true
        System.out.println("128 == 128 : " + (into == intp));// false

        System.out.printf("ByteValue of 127 : %d\n", intn.byteValue());
        System.out.printf("ByteValue of 128 : %d\n", into.byteValue());

        Integer intq = -129;
        Integer intr = -129;

        Integer ints = -128;
        Integer intt = -128;

        System.out.println("-129 == -129 : " + (intq == intr));// false
        System.out.println("-128 == -128 : " + (ints == intt));// true

        System.out.printf("ByteValue of -129 : %d\n", intq.byteValue());
        System.out.printf("ByteValue of -128 : %d\n", ints.byteValue());

        System.out.println("\n128 == -128 : " + (intp == intt));
        System.out.printf("ByteValue of 128 : %d == \"ByteValue of -128 : %d  ::  %b\n\n", into.byteValue(),
                ints.byteValue(), (into.byteValue() == ints.byteValue()));

        Integer inta = new Integer(127);
        Integer intb = new Integer(127);
        Integer intc = Integer.valueOf(127);
        Integer intd = Integer.valueOf(127);

        System.out.printf("new Integer(127) == new Integer(127) :         " + (inta == intb) + "\n");// false
        System.out.println("Integer.valueOf(127) == Integer.valueOf(127) : " + (intc == intd));// true

        Integer inte = new Integer(128);
        Integer intf = new Integer(128);
        Integer intg = Integer.valueOf(128);
        Integer inth = Integer.valueOf(128);

        System.out.println("new Integer(128) == new Integer(128) :         " + (inte == intf));// false
        System.out.println("Integer.valueOf(128) == Integer.valueOf(128) : " + (intg == inth) + "\n"); // false

        System.out.println("\n-------- 128 - Special -----------\n");
        // ein seltsamer Spezialfall... der für alle Vielfache von 128 gilt
        // was daran liegt, dass für byteValue nur das letzte Byte oder Bit ausgewertet wird, wobei in diesem speziellen Fall das Bit-Muster gleich ist
        Integer a = -128;
        Integer b = 128;
        System.out.println(a.byteValue() == b.byteValue());
        System.out.println(a.intValue() == b.intValue());
        System.out.println(a.shortValue() == b.shortValue());
        System.out.println(a == b);

        System.out.printf("a.byteValue() : %d%n", a.byteValue()); // als bit 10000000
        System.out.printf("b.byteValue() : %d%n", b.byteValue()); // als bit 10000000
        System.out.println("Integer.toBinaryString() : "+ Integer.toBinaryString(a));
        System.out.println("Integer.toBinaryString() : 000000000000000000000000"+ Integer.toBinaryString(b));

        System.out.println("\n----------------- Objekte  ---------------\n");
        // Bezieht sich auf die Class EqualObjekt
        EqualObjekt obj1 = new EqualObjekt(10,20,"gleiches Objekt");
        EqualObjekt obj2 = new EqualObjekt(10,20,"gleiches Objekt");

        obj1.print();
        obj2.print();

        System.out.println(obj1.equals(obj2));
        System.out.println(obj2.equals(obj1));
    }
}
