package minimals.interfacethings;

public class InterfaceThings {

    public static void main(String[] args) {
        InterfaceObjekt intfaceobj = new InterfaceObjekt();
        DataBaseInterface dbnull = null;
        DataBaseInterface db = new SQL_ServerImplementation();
        db.saveInterfaceObjekt(intfaceobj);
        InterfaceObjekt intfaceobj_neu = db.getInterfaceObjekt(100);
        intfaceobj_neu.print();
        intfaceobj.print();
        // List<InterfaceObjekt> alle = db.getAll();

    }
}
