package minimals.abstractthings;

public class MyOwnWriterDocument extends AbstractDocument {

    @Override
    protected void save() {
        System.out.println("MyOwnWriterDocument voll weggespeichert!!");
    }
}
