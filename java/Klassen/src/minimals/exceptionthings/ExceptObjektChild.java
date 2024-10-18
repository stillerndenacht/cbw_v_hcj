// Start ist mit exceptionThingsforObj
package minimals.exceptionthings;

public class ExceptObjektChild extends ExceptObjekt {

    public ExceptObjektChild() {
        super();
    }

    public void setZweiChild(double zwei) throws MyOwnChildException {
        if (zwei > 10) {
            throw new MyOwnChildException("liebes Kind nix über 10 - deine Eingabe war : " + zwei, "\n", "setZweiChild", 9999);

        }
        this.zwei = zwei;
    }
}
