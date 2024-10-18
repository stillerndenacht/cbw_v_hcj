package applications;

import vorlagen.AbstractApplication;
import vorlagen.AbstractDocument;

public class MyCalc extends AbstractApplication{

	@Override
	protected AbstractDocument createNewDocument() {
		return new MyCalcDocument();
	}

}
