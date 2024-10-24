package minimals.stringthings;

public class StringThings {
    public static void main(String[] args) {
        String hallo = "Hallo";
        String welt = "     WELT       ";
        String halloconcat = hallo.concat(" Welt!");
// String-Methoden ändern nichts am Original - Veränderungen müssen in neue Variablen geschrieben werden
System.out.println("----- String Methoden ---------");
        System.out.println(hallo);
        System.out.println(halloconcat);
        System.out.println(welt);
        System.out.println(welt.trim());
        System.out.println("nach trim: "+welt);
        System.out.println(hallo.replace('l', 's'));
        System.out.println(hallo);
        System.out.println(hallo.replace("ll", " hohoh "));
        System.out.println(hallo);
        System.out.println(halloconcat.substring(1,8));
        System.out.println(hallo.charAt(1));
        System.out.println(halloconcat.length());
        System.out.println(halloconcat.startsWith("We",2));
        System.out.println(halloconcat.endsWith("Welt!"));

        System.out.println("\n----- comparTo() ----------");
        String compareme = "compareMe";
        String compareme2 = "compareMe";
        String compareme3 = "compareme";

        System.out.println(compareme.compareTo(compareme2)); //0
        System.out.println(compareme.compareTo(compareme3)); // -32 das entspricht dem Abstand der Codepoints von M und m siehe unten
        System.out.println(compareme3.compareTo(compareme)); // 32

        System.out.println(compareme.codePointAt(7)); // 77
        System.out.println(compareme3.codePointAt(7)); // 109
        System.out.println(compareme.codePointAt(7)-compareme3.codePointAt(7)); // -32 M - m

        System.out.println("\n----- comparTo() 2 ----------");
        String compareme10 = "Abcde";
        String compareme11 = "abcde";
        String compareme12 = "aBcde";
        String compareme13 = "Bcde";

        System.out.println(compareme10.compareTo(compareme11)); //-32 A - a
        System.out.println(compareme10.compareTo(compareme12)); // -32 A - a
        System.out.println(compareme12.compareTo(compareme10)); // 32 a - A
        System.out.println(compareme12.compareTo(compareme11)); // -32 B - b
        System.out.println(compareme12.compareTo(compareme13)); // 31 a - B


// StringBuilder-Methoden ändern (immer?) das Original
System.out.println("----- StringBuilder Methoden ---------");
        StringBuilder substri = new StringBuilder("Dreh mich");
        System.out.println(substri);
        System.out.println(substri.reverse());
        System.out.println(substri);
        System.out.println(substri.length());
        substri.setLength(5);
        System.out.println(substri);
        substri.setLength(15);// neue Länge ist 15 obwohl man davon nix sieht??
        System.out.println(substri + "-" +substri); // Output hcim -hcim
        System.out.println(substri.length()); // Output 15
    }
}
