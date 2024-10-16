package application;

public class MyException extends IllegalArgumentException{
	private int zeile;
	private String method;
	private int fehlerCode;
	
	
	
	public MyException(String s, int zeile, String method, int fehlerCode) {
		super(s);
		this.zeile = zeile;
		this.method = method;
		this.fehlerCode = fehlerCode;
	}
	public int getZeile() {
		return zeile;
	}
	public String getMethod() {
		return method;
	}
	public int getFehlerCode() {
		return fehlerCode;
	}
	@Override
	public String getMessage() {
		
		return "Fehler in " + method + " Zeile " + zeile + " Fehlercode: " + fehlerCode + "\n" + super.getMessage();
	}
	
	
	

}
