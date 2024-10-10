public class KfzTest {


	public static void main(String[] args)throws Exception {
		
		Kfz[] fuhrpark = new Kfz[10];

		fuhrpark[0] = new Kfz("BMW", "535i", 2006, 
						210, "Blau", 10.4, 90);
		fuhrpark[1] = new Pkw("BMW", "335i", 2007, 
						210, "Rot", 9.4, 85, 4);
		fuhrpark[2] = new Lkw("Scania", "D346", 2001, 
						420, "Gr�n", 30.4, 290, 49.2);
		fuhrpark[3] = new Cabrio("Mercedes", "SL350", 2006, 
						310, "Silbern", 12.4, 110, 3, true);
		fuhrpark[4] = new Kfz("BMW", "535i", 2006, 
						210, "Schwarz", 10.4, 90);
		fuhrpark[5] = new Lkw("DAF", "D34", 1999, 
						190, "Grau", 10.4, 210, 100.0);
		fuhrpark[6] = new Cabrio("Audi", "TT", 2002, 
						180, "Wei�", 11.4, 95, 4, false);
		fuhrpark[7] = new Pkw("BMW", "Isetta", 1957, 
						15, "Rot-Wei�", 4.4, 20, 2);
		fuhrpark[8] = new Cabrio("Messerschmitt", "Kabinenroller", 1954, 
						10, "Gr�n", 3.4, 10, 2, true);
		fuhrpark[9] = new Lkw("Mercedes", "3445", 2006, 
						410, "Blau", 35.2, 450, 200);
		

		
		
		for(Kfz kfz : fuhrpark ) {
			kfz.print();
		}
		System.out.println("\n===================================\n");
		for(Kfz kfz : fuhrpark) {
			double kilometer = 1000;
			kfz.tanken();
			while (kilometer > 0) {
				kilometer = kfz.fahren(kilometer);
				kfz.tanken();
			}
			kfz.print();
			
			System.out.println("\n===================================\n");
		}
		
		
		
		
		
/*		
		
		
		
		
		try
		{
			ObjectOutputStream objectOut = new ObjectOutputStream(new BufferedOutputStream(new FileOutputStream("fuhrpark.dat")));
			
			for(Kfz fahrzeug : fuhrpark)
			{
				objectOut.writeObject(fahrzeug);
				objectOut.flush();
			}
			objectOut.close();
		}
		catch(IOException ioE)
		{
			System.out.println(ioE.getMessage());
			System.out.println(ioE.getStackTrace());
			throw ioE;
		}
		catch(Exception ioE)
		{
			System.out.println(ioE.getMessage());
			System.out.println(ioE.getStackTrace());
			throw ioE;
		}
		
		Kfz[] fuhrparkNeu = new Kfz[100];
		int i = 0;
		
		try {
			ObjectInputStream objectIn = new ObjectInputStream(new BufferedInputStream(new FileInputStream("fuhrpark.dat")));
			Object obj;
			while(true)
			{
				obj = objectIn.readObject();
				fuhrparkNeu[i++] = (Kfz)obj;	
			}
		} 
		catch(EOFException e){}
		catch (IOException e) {
			System.out.println(e.getMessage());
			System.out.println(e.getStackTrace());
			throw e;
		}
		
		
		for(Kfz fahrzeug : fuhrparkNeu)
			if( fahrzeug != null) fahrzeug.print();
		
		*/
	}

}
