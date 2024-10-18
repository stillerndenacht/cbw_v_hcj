package minimals.abstractthings;

import javax.naming.OperationNotSupportedException;

public abstract class AbstractApp {

    private AbstractDocument[] docs;
    private int i;

    public AbstractApp() {
        this(10);
    }

    public AbstractApp(int arraysize) {
        docs = new AbstractDocument[arraysize];
    }

    public void newDocument() throws OperationNotSupportedException {
        if (i < docs.length) {
            //Document erzeugen
            AbstractDocument doc = createNewDocument();
            //Document in array ablegen
            docs[i] = doc;
            //Document temporär speichern
            doc.save();
            //index i hochzählen
            ++i;
        } else {
            throw new OperationNotSupportedException("zuviele Dokumente gleichzeitig geöffnet!!");
        }
    }
    protected abstract AbstractDocument createNewDocument();
}
