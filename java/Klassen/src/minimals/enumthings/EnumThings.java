package minimals.enumthings;


import static minimals.enumthings.Stockwerk.*;

// Enums sind selbst definierte Konstanten mit definierbaren Methoden
// AufzugEnum und OperatorEnum sind Enums
public class EnumThings {
    public static void main(String[] args) {
        AufzugEnum aufzug = new AufzugEnum();
        aufzug.stockwerk = Stockwerk.UG3;

        // for (Stockwerk st : Stockwerk.values()) {
        //     System.out.println(st.ordinal() + ", ");
        //     System.out.println(st.name());
        //     System.out.println(st.getBezeichner() + " ");
        //     System.out.println(st.getFarbe());
        // }
        aufzug.stockwerk = aufzug.stockwerk.stockDown();
        System.out.println(aufzug.stockwerk);
        aufzug.stockwerk = aufzug.stockwerk.stockDown();
        System.out.println(aufzug.stockwerk);

        // Fahrstuhl fahren =)
        System.out.println("\n--- Fahrstuhl fahren ------\n");
        aufzug.elevate(UG5,UG3);      

        aufzug.elevate(OG5,UG3);        

        aufzug.elevate(OG4,OG4);
        // Start aus dem aktuellen Stockwerk
        aufzug.elevate(OG1);
        // das folgende geht nicht, weil es kein OG11 in enum Stockwerk gibt
        // aufzug.elevate(OG1, OG11);
        
    }
}
