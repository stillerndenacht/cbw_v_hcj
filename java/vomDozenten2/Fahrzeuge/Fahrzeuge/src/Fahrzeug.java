import java.io.*;


//public class FahrzeugBasis
//{
//	private int antennenlaenge=100;
//
//	public Fahrzeug(int antennenlaenge) {
//		super();
//		this.antennenlaenge = antennenlaenge;
//	}
//	
//	public Fahrzeug() {
//		System.out.println("BasisKonstruktor");
//		antennenlaenge = 200;
//	}
//	
//}

//public class Kfz extends Fahrzeug implements Serializable{


public class Fahrzeug {
	private String hersteller;
	private String modell;
	private int bj;
	private int ps;
	private String farbe;
	private double verbrauch;
	private int maxTankInh;
	private transient double aktTankInh;
	private double tagesKilometer;
	private double tachostand;
	
	public Fahrzeug()
	{
//		super(10);
		hersteller = "unbekannt";
		modell = "unbekannt";
		bj = 1880;
		ps = 0;
		farbe = "unbekannt";
		this.verbrauch = 0.0;
		this.maxTankInh = 0;
		this.aktTankInh = 0;
		this.tagesKilometer = 0;
		this.tachostand = 0;
	}
	
	public Fahrzeug(String hersteller, String modell, int bj, int ps, String farbe, double verbrauch, int maxTankInh) {
//		super(10);
		this.hersteller = hersteller;
		this.modell = modell;
		this.bj = bj;
		this.ps = ps;
		this.farbe = farbe;
		this.verbrauch = verbrauch;
		this.maxTankInh = maxTankInh;
		this.aktTankInh = 0;
		this.tagesKilometer = 0;
		this.tachostand = 0;
	}
	
	public double fahren (double km)
	{
		double rw = reichweite();
		if (rw < km)
		{
			tachostand += rw;
			tagesKilometer += rw;
			aktTankInh = 0;
			return km - rw;
		}
		else
		{
			tachostand += km;
			tagesKilometer += km;
			aktTankInh -= streckenVerbrauch(km);
			return 0.0;
		}
	}
	
	public void tanken()
	{
		aktTankInh = maxTankInh;
		tagesKilometer = 0;
	}
	
	public void tanken (int liter)
	{
		if (maxTankInh - aktTankInh < liter)
		{
			aktTankInh = maxTankInh;
		}
		else
		{
			aktTankInh += liter;
		}
		tagesKilometer = 0;
	}

	private double reichweite()
	{
		return aktTankInh / verbrauch * 100.0;
	}
	
	private double streckenVerbrauch(double km)
	{
		return km * verbrauch / 100.0;
	}
	
	public void display()
	{
		System.out.println("\n\n" + this.getClass().getName() + "-Daten:");
		System.out.println("----------------------");
		System.out.printf("Hersteller:         %s\n", hersteller);
		System.out.printf("Modell:             %s\n", modell);
		System.out.printf("Baujahr:            %-5d\n", bj);
		System.out.printf("PS:                 %-5d\n", ps);
		System.out.printf("Farbe:              %s\n", farbe);
		System.out.printf("Verbrauch:          %-5.1f l/100km\n", verbrauch);
		System.out.printf("max. TankInhalt:    %-5d l\n", maxTankInh);
		System.out.printf("akt. TankInhalt:    %-5.2f l\n", aktTankInh);
		System.out.printf("Tageskilometer:     %-5.2f km\n", tagesKilometer);
		System.out.printf("Tachostand:         %-10.2f km\n", tachostand);
	}
	
	public int getBj() {return bj;}
	public void setBj(int b) {bj = b; }
	public String getFarbe() {	return farbe;	}
	public void setFarbe(String f) { farbe = f;	}
	public String getHersteller() {	return hersteller;}
	public void setHersteller(String herst) {hersteller = herst;}
	public String getModell() {	return modell;	}
	public void setModell(String m) {modell = m;}
	public int getPs() {return ps;}
	public void setPs(int p) {	ps = p;	}
	public double getVerbrauch() {return verbrauch;}
	public void setVerbrauch(double verbrauch) {this.verbrauch = verbrauch;}
	public double getAktTankInh() {return aktTankInh;}
	public int getMaxTankInh() {return maxTankInh;}
	public double getTachostand() {return tachostand;}
	public double getTagesKilometer() {return tagesKilometer;}

	public void speichernDaten(String datei)
	{
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
	
	public void speichernDaten(DataOutputStream out)
	{
		if(out != null)
		{
			try
			{
				out.writeUTF(hersteller);
				out.writeUTF(modell);
				out.writeInt(bj);
				out.writeInt(ps);
				out.writeUTF(farbe);
				out.writeDouble(verbrauch);
				out.writeInt(maxTankInh);
				out.writeDouble(aktTankInh);
				out.writeDouble(tagesKilometer);
				out.writeDouble(tachostand);
			}
			catch(IOException ioE)
			{
				System.out.println(ioE.getMessage());
			}
		}
	}
	
	public void ladeDaten(String datei)
	{
		try 
		{
			DataInputStream dataIn = new DataInputStream(new BufferedInputStream(new FileInputStream(datei)));
			ladeDaten(dataIn);
			dataIn.close();
		} catch (IOException e) {
			System.out.println(e.getMessage());
		}
	}
	
	public void ladeDaten(DataInputStream dataIn)
	{
		if(dataIn != null)
		{
			try
			{
				hersteller = dataIn.readUTF();
				modell = dataIn.readUTF();
				bj = dataIn.readInt();
				ps = dataIn.readInt();
				farbe = dataIn.readUTF();
				verbrauch = dataIn.readDouble();
				maxTankInh = dataIn.readInt();
				aktTankInh = dataIn.readDouble();
				tagesKilometer = dataIn.readDouble();
				tachostand = dataIn.readDouble();
			}
			catch(IOException ioE)
			{
				System.out.println(ioE.getMessage());
			}
		}
	}
}
