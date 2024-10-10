import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;


public class Cabrio extends Pkw {
	
	private boolean dachOffen;

	public Cabrio() {
		super();
		dachOffen = false;
	}

	public Cabrio(String hersteller, String modell, int bj, int ps, String farbe, double verbrauch, 
			int maxTankInh, int anzahlSitze, boolean dachOffen) {
		super(hersteller, modell, bj, ps, farbe, verbrauch, maxTankInh, anzahlSitze);
		this.dachOffen = dachOffen;
	}
	
	public void dachOeffnen(){ dachOffen = true;}
	public void dachSchliessen(){ dachOffen = false;}
	public boolean isDachoffen(){
		return dachOffen;
	}

	@Override
	public void print() {
		super.print();
		System.out.printf("Dachzustand:      %s\n", 
				((dachOffen)? "offen" : "geschlossen"));
	}

	
	/*
	@Override
	public void speichernDaten(DataOutputStream out) {
		super.speichernDaten(out);
		try
		{
			out.writeBoolean(dachOffen);
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
				dachOffen = dataIn.readBoolean();
			}
			catch(IOException ioE)
			{
				System.out.println(ioE.getMessage());
			}
		}
		
	}
*/
}
