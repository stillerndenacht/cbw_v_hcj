package minimals.interfacethings;

public class InterfaceObjekt {

    private String interstring = "InterfaceClass";
    private int interint = 0;

    public InterfaceObjekt() {++interint;
    }

    public InterfaceObjekt(String interstring, int interint) {
        ++interint;
        this.interstring = interstring;
        this.interint = interint;
    }

    public void print() {
        System.out.println(this.getClass().getName());
        System.out.printf("interstring : %12s%n", interstring);
        System.out.printf("interint : %12d%n", this.interint);
    }
}
