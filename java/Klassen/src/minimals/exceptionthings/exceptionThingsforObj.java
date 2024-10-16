package minimals.exceptionthings;

public class exceptionThingsforObj {
public static void main(String[] args) {
    ExceptObjekt exObj = new ExceptObjekt();
    exObj.print();
    // das wirft einen Fehler weil eins nicht über 25 sein soll - siehe throws in ExceptOjekt
    //exObj.setEins(25);
    //exObj.setZwei(-9);
    exObj.print();

    ExceptObjektChild exChild = new ExceptObjektChild();
    exChild.print();
    exChild.setZwei(11);
    exChild.setZweiChild(11);
    

}
}
