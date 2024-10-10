public class Lkw extends Kfz{

	private double ladevolumen;
	public Lkw() {
		super();
		ladevolumen = 0.0;
	}

	public Lkw(String hersteller, String modell, int bj, int ps, String farbe, 
			double verbrauch, int maxTankInh, double ladevolumen) {
		super(hersteller, modell, bj, ps, farbe, verbrauch, maxTankInh);
		this.ladevolumen = ladevolumen;
	}

	public double getLadevolumen() {
		return ladevolumen;
	}
	

	@Override
	public void print() {
		super.print();
		System.out.printf("Ladevolumen:          %-,10.2f m�\n", ladevolumen);
	}
	

	
	
	
	
/*	@Override
	public void speichernDaten(DataOutputStream out) {
		super.speichernDaten(out);
		try
		{
			out.writeDouble(ladevolumen);
		}
		catch(IOException ioE)
		{
			System.out.println(ioE.getMessage());
		}
	}
/*
	@Override
	public void speichernDaten(String datei) {
		try
		{
			DataOutputStream dataOut = new DataOutputStream(new BufferedOutputStream(new FileOutputStream(datei, true)));
			speichernDaten(dataOut);
			dataOut.close();
			
		}
		catch(IOException ioE)
		{
			System.out.println(ioE.getMessage());
		}
	}

	@Override
	public void ladeDaten(DataInputStream dataIn) {
		super.ladeDaten(dataIn);
		if(dataIn != null)
		{
			try
			{
				ladevolumen = dataIn.readDouble();
			}
			catch(IOException ioE)
			{
				System.out.println(ioE.getMessage());
			}
		}
		
	}
*/
}
