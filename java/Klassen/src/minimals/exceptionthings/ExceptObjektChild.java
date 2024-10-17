package minimals.exceptionthings;

public class ExceptObjektChild extends ExceptObjekt {

    public ExceptObjektChild() {
        super();
    }

    public void setZweiChild(double zwei) throws MyOwnChildException {
        if (zwei > 10) {
            throw new MyOwnChildException("liebes Kind nix über 10" + zwei);
        }
        this.zwei = zwei;
    }
}
