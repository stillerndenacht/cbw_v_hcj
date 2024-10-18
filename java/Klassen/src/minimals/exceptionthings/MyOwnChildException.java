// Start ist mit exceptionThingsforObj
package minimals.exceptionthings;

class MyOwnChildException extends IllegalArgumentException {

    private String zeile;
    private String method;
    private int fehlerCode;

    public MyOwnChildException(String s, String zeile, String method, int fehlerCode) {
        super(s);
        this.zeile = zeile;
        this.method = method;
        this.fehlerCode = fehlerCode;
    }

    public String getZeile() {

        for (StackTraceElement i : super.getStackTrace()) {
            zeile += i.toString() + "\n";
        }

        //zeile = super.getStackTrace()[0].toString();
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
        return "\nFehler in : " + method + "\nZeilen : " + getZeile() + "Fehlercode :" + fehlerCode + "\nsuper.getMessage :\n" + super.getMessage();
        // return super.toString();

    }

}
