package vorlagen;

import javax.naming.OperationNotSupportedException;

public abstract class AbstractApplication {
	private AbstractDocument[] docs;
	private int index;
	
	public AbstractApplication() {
		this(10);
	}

	public AbstractApplication(int arraysize) {
		docs = new AbstractDocument[arraysize];
	}
	
	public void newDocument() throws OperationNotSupportedException {
		if(index < docs.length) {
			// Dokument erzeugen
			AbstractDocument doc = createNewDocument();
			// Dokument in array ablegen
			docs[index] = doc;
			// Dokument temporär speichern
			doc.save();
			// index hochzählen
			++index;
			
		} else {
			throw new OperationNotSupportedException("zuviele Dokumente gleichzeitig geöffnet");
		}
	}
	
	protected abstract AbstractDocument createNewDocument();
	
	
//	protected AbstractDocument createNewDocument2() { return null; };

}
