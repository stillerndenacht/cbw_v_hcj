package application;

import javax.naming.OperationNotSupportedException;

import applications.MyCalc;
import applications.MyWriter;
import vorlagen.AbstractApplication;

public class TestAbstrakteKlassen {

	public static void main(String[] args) {
		AbstractApplication writer = new MyWriter();
		AbstractApplication calc = new MyCalc();
		try {
			writer.newDocument();
			calc.newDocument();
		} catch (OperationNotSupportedException e) {
			e.printStackTrace();
		}
	}

}
