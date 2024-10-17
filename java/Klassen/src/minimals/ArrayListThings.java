package minimals;

import java.util.ArrayList;

public class ArrayListThings {
public static void main(String[] args) {
    ArrayList<String> wortArray = new ArrayList<>();
    wortArray.add("ich");
    wortArray.add("bin");
    wortArray.add("eine");
    wortArray.add("Array");
    wortArray.add("\bList");
    for(String tex : wortArray){
        System.out.println(tex);
    }
    // die ArrayList zu einem String zusammensetzen...
    String text ="";
    for(String tex : wortArray){
        text += tex + " ";
        System.out.println(text);
    }
    System.out.println("Ende : " + text);

    
}
}
