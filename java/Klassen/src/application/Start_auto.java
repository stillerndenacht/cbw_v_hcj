package application;

public class Start_auto {
    public static void main(String[] args) {
        Fahrzeug car0 = new Fahrzeug("Noname", 1, "transparent", 0);
        Fahrzeug car1 = new Fahrzeug();
        Pkw car2 = new Pkw();
        Fahrzeug car3 = new Pkw("Opel", 55, "gelb", 4);
        Fahrzeug car4 = new Cabrio();
        Pkw car5 = new Cabrio("Lamborghini",360, "Racing Green", 2);
        Fahrzeug car6 = new Lkw();
        // car1.print();
        // car2.print();
        // car3.print();
        // car4.print();
        // car5.print();

        Fahrzeug[] carlist = new Fahrzeug[7];
        carlist[0] = car0;
        carlist[1] = car1;
        carlist[2] = car2;
        carlist[3] = car3;
        carlist[4] = car4;
        carlist[5] = car5;
        carlist[6] = car6;

        for (int index = 0; index < carlist.length; ++index) {
            carlist[index].print();
            System.out.println("\n°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°");
        }
    }

}
