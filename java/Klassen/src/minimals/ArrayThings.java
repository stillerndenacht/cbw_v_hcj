package minimals;

public class ArrayThings {

    public static void main(String[] args) {

        // ------------ einfache Arrays ----------------

        int[] simpleArray1 = {3, 4, 5};
        int simpleArray2[] = {3, 4, 5};

        int[] simpleArray3, simpleArray4;
        simpleArray3 = new int[]{3, 4, 5};

        simpleArray4 = new int[3];
        simpleArray4[0] = 3;
        simpleArray4[1] = 4;
        simpleArray4[2] = 5;

        int[] simpleArrayReferer = simpleArray1; // liefert eine zweite Referenz auf das Original

        //das gibt nur eine Speicheradresse
        System.out.println(simpleArray1); //[I@4517d9a3
        System.out.println(simpleArray2); //[I@372f7a8d
        System.out.println(simpleArrayReferer); // [I@4517d9a3

        // Ausgabe [3, 4, 5]
        System.out.println(java.util.Arrays.toString(simpleArray1));

        // Ausgabe einzelner Elemente -- Ausgabe 4
        System.out.println(simpleArray1[1]);

// ---------- Mehrdimensionale Arrays ------------

        int[][] multiArray1 = {{1}, {2, 7}, {3, 4}};
        int[] multiArray2[] = {{1}, {2}, simpleArray1};
        int multiArray3[][] = {simpleArray1, simpleArray2, simpleArray3};

        // die Speicheradresse des Array [[I@2f92e0f4
        System.out.println(multiArray1);
        // ein Array von Speicheradressen [[I@28a418fc, [I@5305068a, [I@1f32e575]
        System.out.println(java.util.Arrays.toString(multiArray1));
        // der Inhalt des 2. Arrays [2, 7]
        System.out.println(java.util.Arrays.toString(multiArray1[1]));
        // [3, 4, 5]
        System.out.println(java.util.Arrays.toString(multiArray3[2]));


       // ---------- Erstellen , Füllen und Ausgeben über Schleifen ----------

       
    }
}
