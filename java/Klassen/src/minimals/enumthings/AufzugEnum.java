package minimals.enumthings;

import static java.lang.Math.abs;

public class AufzugEnum {
    Stockwerk stockwerk;

    // wer nur das Ziel eingibt startet aus dem aktuellen Stockwerk
    public Stockwerk elevate(Stockwerk stockZiel) {
        System.out.println("Sie starten direkt von hier: " + this.stockwerk);
        // der Startwert wird auf das aktuelle Stockwerk gesetzt und ruft dann die überladene Methode auf
        Stockwerk stockStart = this.stockwerk;
        return this.elevate(stockStart, stockZiel);
    }

    // die Methode für Start- und Ziel-Stockwerk
    public Stockwerk elevate(Stockwerk stockStart, Stockwerk stockZiel) {
        // das aktuelle Stockwerk wird auf den Startwert gesetzt
        this.stockwerk = stockStart;
        
        System.out.printf("Start im: %s Ziel ist: %s%n", stockwerk, stockZiel);

        // der Abstand zwische Start und Ziel wird berechnet
        // die Ordinal-Zahlen sind wie ein Index, starten mit 0 im UG5
        int elevNum = stockwerk.ordinal() - stockZiel.ordinal();
        // Abstand negativ - also Ziel höher als Start - also aufwärts
        if (elevNum < 0) {
            System.out.println("\nup up ... " + abs(elevNum));
            // das nächste Stockwerk nach oben wird so oft aufgerufen, wie der Abstand ist (stockUp() aus Stockwerk-Enum)
            for (int elev = 0; elev < abs(elevNum); elev++) {
                this.stockwerk = this.stockwerk.stockUp();
                System.out.println(" >>> " + this.stockwerk);
            }
        // Abstand positiv Ziel kleiner Start - abwärts
        } else if (elevNum > 0) {
            System.out.println("\ndown down ... " + elevNum);
            for (int elev = 0; elev < abs(elevNum); elev++) {
                this.stockwerk = this.stockwerk.stockDown();
                System.out.println(this.stockwerk + " <<< ");
            }

        } else {
            System.out.println("Start und Ziel sind gleich .... Sie sind schon da!!");
        }
        System.out.println("Sie haben ihr Ziel erreicht: " + this.stockwerk.getBezeichner());

        return this.stockwerk;
    }
}
