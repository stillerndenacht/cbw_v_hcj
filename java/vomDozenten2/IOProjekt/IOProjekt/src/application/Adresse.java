package application;

public class Adresse{

//	private static final long serialVersionUID = 1L;
	private String ort;

	public Adresse() {
		this("unbekannt");
		// TODO Auto-generated constructor stub
	}

	public Adresse(String ort) {
		super();
		this.ort = ort;
	}

	public String getOrt() {
		return ort;
	}

	public void setOrt(String ort) {
		this.ort = ort;
	}

	@Override
	public String toString() {
		return "Adresse [ort=" + ort + "]";
	}
	
	
}
