package minimals.pack.pack1;

import minimals.Zugriff;

public class ZugriffErbe extends Zugriff{

@Override
public void zugriffsprint() {
    Zugriff zugrifferbt = new Zugriff();
    ZugriffErbe zugriffgeerbt = new ZugriffErbe();

        // System.out.println("zugrifferbt.defaultZugriff : " + zugrifferbt.defaultZugriff);
        // System.out.println("zugrifferbt.privateZugriff : " + zugrifferbt.privateZugriff);
        // System.out.println("zugrifferbt.protectedZugriff : " + zugrifferbt.protectedZugriff);
        System.out.println("zugrifferbt.publicZugriff : " + zugrifferbt.publicZugriff);

        System.out.println("zugriffgeerbt.protectedZugriff : " + zugriffgeerbt.protectedZugriff);
        System.out.println("protectedZugriff : " + protectedZugriff);
    }
}
