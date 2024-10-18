package applications;

import vorlagen.AbstractApplication;
import vorlagen.AbstractDocument;

public class MyWriter extends AbstractApplication{

	@Override
	protected AbstractDocument createNewDocument() {
		return new MyWriterDocument();
	}

	
}
