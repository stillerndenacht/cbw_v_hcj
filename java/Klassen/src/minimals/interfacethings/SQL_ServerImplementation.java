package minimals.interfacethings;

import java.util.ArrayList;
import java.util.List;

public class SQL_ServerImplementation implements DataBaseInterface {

    @Override
    public void saveInterfaceObjekt(InterfaceObjekt intfaceobj) {
        System.out.println("InterfaceObjekt auf SQL Server gespeichert");
    }

    @Override
    public InterfaceObjekt getInterfaceObjekt(int id) {
        System.out.println("InterfaceObjekt von SQL Server geladen");
        return new InterfaceObjekt();
    }

    @Override
    public List<InterfaceObjekt> getAll() {
        List<InterfaceObjekt> intfaceobj_list = new ArrayList<>();
        //     for (int i = 0; i < count; i++) {
        //         intfaceobj_list.add(count[i])
        //     }
        //     System.out.println(intfaceobj_list);
        // }
        return intfaceobj_list;
    }

}
