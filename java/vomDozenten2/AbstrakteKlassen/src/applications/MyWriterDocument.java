package applications;

import vorlagen.AbstractDocument;

public class MyWriterDocument extends AbstractDocument{

	@Override
	protected void save() {
		System.out.println("MyWriterDocument gespeichert");
		
	}

}
