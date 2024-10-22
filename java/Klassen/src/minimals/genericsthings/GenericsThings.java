package minimals.genericsthings;

import java.util.ArrayList;

public class GenericsThings {
    public static void main(String[] args) {
        // so war das früher.... vor java 7?
        ArrayList liste = new ArrayList();
        liste.add(45);
        System.out.println(liste.get(0));
        int x = (Integer) liste.get(0);
        System.out.println("x als int: " + x);

        System.out.println("\n ----- StringList --------\n");

        StringList strings = new StringList();
        strings.add("Hallo");
        strings.add("Welt");
        System.out.println(strings.get(0));
        System.out.println(strings.get(1));

        System.out.println("\n ----- MyList --------\n");
        MyList<Integer> myIntList = new MyList<>();
        System.out.println(myIntList);
       // myList.add("5"); // geht nicht weil Integer gefordert ist
       myIntList.add(5);
       myIntList.add(6);
       myIntList.add(7);
       myIntList.add(8);
       myIntList.add(9);
       
       System.out.println(myIntList.get(0));
       System.out.println(myIntList.get(2));
       System.out.println(myIntList.get(4));

       System.out.println("\n ----- MyList getAll --------\n");
       System.out.println(myIntList.getAll()); 
       // mit der vorgegebenen capacity von 3 Ausgabe:[5, 6, 7, 8, 9, null]
       // hätte man sie so intitialisiert : MyList<Integer> myIntList = new MyList<>(5);
       // käme keine null - das sind die Leerstellen der vordefinierten Arraygröße von 3
       // die ja laut resizeElements() verdoppelt wird, wenn mehr elemente eingefügt werden...

       MyList<Character> myCharList = new MyList<>(4);
       myCharList.add('a');
       myCharList.add('b');
       myCharList.add('c');
       myCharList.add('d');
       myCharList.add('e');
       myCharList.add('f');
       System.out.println(myCharList.getAll());
       // auch die null hat einen Index
       System.out.println(myCharList.get(6));
       System.out.println(myCharList.get(7));

    }
}
