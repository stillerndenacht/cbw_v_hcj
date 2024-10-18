package minimals.abstractthings;

import javax.naming.OperationNotSupportedException;

public class AbstractThings {
public static void main(String[] args) {
    AbstractApp writer = new MyOwnWriter();
    try {
        writer.newDocument();
    } catch (OperationNotSupportedException e) {
        e.printStackTrace();
    }
}
}
