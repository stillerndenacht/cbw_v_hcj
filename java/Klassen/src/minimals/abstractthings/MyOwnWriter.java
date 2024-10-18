package minimals.abstractthings;

public class MyOwnWriter extends AbstractApp {

    @Override
    protected AbstractDocument createNewDocument() {
        return new MyOwnWriterDocument();

    }
}
