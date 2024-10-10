public class Pkw extends Kfz {

	private int anzahlSitze;
	public Pkw() {
		super();
		anzahlSitze = 4;
	}

	public Pkw(String hersteller, String modell, int bj, int ps, String farbe, 
			double verbrauch, int maxTankInh, int anzahlSitze) {
		super(hersteller, modell, bj, ps, farbe, verbrauch, maxTankInh);
		this.anzahlSitze = anzahlSitze;
	}

	public int getAnzahlSitze() {
		return anzahlSitze;
	}

	@Override
	public void print(){
		super.print();
		System.out.printf("Sitze:             %-,5d\n", anzahlSitze);
		
	}

/*	@Override
	public void speichernDaten(DataOutputStream out) {
		super.speichernDaten(out);
		try
		{
			out.writeInt(anzahlSitze);
		}
		catch(IOException ioE)
		{
			System.out.println(ioE.getMessage());
		}
	}

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
				anzahlSitze = dataIn.readInt();
			}
			catch(IOException ioE)
			{
				System.out.println(ioE.getMessage());
			}
		}
		
	}

	@Override
	public void ladeDaten(String datei) {
		try 
		{
			DataInputStream dataIn = new DataInputStream(new BufferedInputStream(new FileInputStream(datei)));
			ladeDaten(dataIn);
			dataIn.close();
		} catch (IOException e) {
			System.out.println(e.getMessage());
		}
	}
*/
	
}
