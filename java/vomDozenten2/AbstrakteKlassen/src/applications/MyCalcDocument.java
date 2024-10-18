package applications;

import vorlagen.AbstractDocument;

public class MyCalcDocument extends AbstractDocument{

	@Override
	protected void save() {
		System.out.println("MyCalcDocument gespeichert");
		
	}

}
