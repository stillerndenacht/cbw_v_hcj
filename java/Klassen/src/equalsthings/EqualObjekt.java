package equalsthings;

import java.util.Objects;

public class EqualObjekt {
    private double eins = 0;
    private double zwei = 0;
    private String name = "noname";

    public EqualObjekt() {
    }

    public EqualObjekt(double eins, double zwei, String name) {
        this.eins = eins;
        this.zwei = zwei;
        this.name = name;
    }

    public double getEins() {
        return eins;
    }

    public void setEins(double eins) {
        this.eins = eins;
    }

    public double getZwei() {
        return zwei;
    }

    public void setZwei(double zwei) {
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
        if (this == obj)
            return true;
        if (obj == null)
            return false;
        if (getClass() != obj.getClass())
            return false;
        EqualObjekt other = (EqualObjekt) obj;
        return Double.doubleToLongBits(eins) == Double.doubleToLongBits(other.eins)
                && Double.doubleToLongBits(zwei) == Double.doubleToLongBits(other.zwei)
                && Objects.equals(name, other.name);

    }

}
