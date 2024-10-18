// Start ist mit exceptionThingsforObj
package minimals.exceptionthings;

import java.util.Objects;

public class ExceptObjekt {

    private double eins = 0;
    protected double zwei = 0;
    private String name = "noname";

    public ExceptObjekt() {
    }

    public ExceptObjekt(double eins, double zwei, String name) {
        this.eins = eins;
        this.zwei = zwei;
        this.name = name;
    }

    public double getEins() {
        return eins;
    }

    // erst throws - mit Fehlerklasse
    public void setEins(double eins) throws IllegalArgumentException {
        if (eins > 20) {
            // dann throw mit FehlerObjekt(anzuzeigende Meldung)
            throw new IllegalArgumentException("eins darf nicht über 20 sein! -" + eins + "- ist also falsch!");
        }
        this.eins = eins;
    }

    public double getZwei() {
        return zwei;
    }
// es ist ihm auch egal ob der geworfene Fehler irgendwas mit dem zu tun hat was passiert

    public void setZwei(double zwei) throws ArithmeticException {
        if (zwei < 0) {
        
            throw new ArithmeticException("das ist absurd..." + zwei);
        }
        this.zwei = zwei;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void print() {
        System.out.println(this.getClass().getName());
        System.out.printf("eins : %12.2f %n", eins);
        System.out.printf("zwei : %12.2f %n", zwei);
        System.out.printf("name : %12s %n", name);
    }

    @Override
    public int hashCode() {
        return Objects.hash(eins, zwei, name);
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        ExceptObjekt other = (ExceptObjekt) obj;
        return Double.doubleToLongBits(eins) == Double.doubleToLongBits(other.eins)
                && Double.doubleToLongBits(zwei) == Double.doubleToLongBits(other.zwei)
                && Objects.equals(name, other.name);

    }

}
