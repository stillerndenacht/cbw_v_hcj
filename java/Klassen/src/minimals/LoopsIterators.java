package minimals;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.ListIterator;

public class LoopsIterators {
    public static void main(String[] args) {
        String[] wortarray = { "Das", "ist", "eine", "Liste", "von", "Worten", "die", "ein", "Array", "ergeben" };
        ArrayList<String> string1 = new ArrayList<>();
        for (int i = 0; i < wortarray.length; i++) {
            string1.add(wortarray[i]);
        }
        System.out.println(string1);

        System.out.println("\n° °° °° °° °° °° °° °° °° °°");

        Iterator<String> it = string1.iterator();
        while (it.hasNext()) {
            String str1 = it.next();
            System.out.println(str1.charAt(1) + " :" + str1);
        }
        // das wäre natürlich der einfachere Loop....
        // for (String str1 : string1) {
        // System.out.println(str1);
        // }

        System.out.println("\n° °° °° °° °° °° °° °° °° °°");

        ListIterator<String> lit = string1.listIterator();
        while (lit.hasNext()) {
            int i1 = lit.nextIndex();
            String str2 = lit.next();
            // man darf - natürlich - die Arraylist nicht ändern, während sie den Iterator
            // durchläuft
            // string1.remove(3);
            // string1.add("new");
            // string1.set(1, "ersetzt");

            System.out.println(i1 + " : " + str2);
        }

        System.out.println("\n° °° °° °° °° °° °° °° °° °°");

        while (lit.hasPrevious()) {
            int i2 = lit.previousIndex();
            String str3 = lit.previous();

            System.out.println(i2 + " : " + str3);

        }
        System.out.println("\n---- Methoden für ArrayList -----");
        System.out.println(string1);

        string1.remove(3);
        string1.add("new add");
        string1.set(1, "ersetzt");
        string1.set(string1.indexOf("Array"), "LostWord");

        System.out.println(string1);
    }
}
