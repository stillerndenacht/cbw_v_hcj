package de.montag1;

public class StringGrundlagen {
    public static void main(String[] args) {
        int a = 42;
        int b = 42;
        System.out.println(a == b); // true

        String str1 = "Susi";
        String str2 = "Susi";
        String str3 = new String("Susi");
        System.out.println(str1 == str2); // true
        System.out.println(str1 == str3); // false
        
        // um Referenzvariablen nach Inhalt zu vergleichen, muss man .equals() benutzen
        System.out.println(str1.equals(str3));

    }
}
