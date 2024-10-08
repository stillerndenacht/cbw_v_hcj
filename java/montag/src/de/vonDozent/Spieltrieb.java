package de.cbw;

public class Spieltrieb {

    public static void main(String[] args) {

        System.out.println(5 + 37);
        System.out.println("5" + 37);
        System.out.println("5" + 5 + 37);
        System.out.println("5" + (5 + 37));
        System.out.println(5 * 37  + "5");

        // C++ operator überladung ist möglich
        // Java keine operator überladung
        // der einzige überladene operator ist +

        String str = "Halli";
        String str2 = "Hallo";
        String str3 = str + str2;
        String str4 = "HalliHallo";
        String str5 = "Halli" + "Hallo";
        String str6 = str + str2;

        System.out.println(str3 == str4);
        System.out.println(str3.equals(str4));

        System.out.println(str4 == str5);
        System.out.println(str4.equals(str5));

        System.out.println(str3 == str6);
        System.out.println(str3.equals(str6));







    }
}
