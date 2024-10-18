package minimals.interfacethings;

import java.util.List;

public interface DataBaseInterface {
// Interface attribute sind eigentlich implizit schon public static final (müssten also nicht so deklariert sein)
    public static final int var = 10;
// Interface methoden sind eigentlich implizit schon public abstract (müssten also nicht so deklariert sein)
    public abstract void saveInterfaceObjekt(InterfaceObjekt intfaceobj);

    public abstract InterfaceObjekt getInterfaceObjekt(int id);

    public abstract List<InterfaceObjekt> getAll();
}
