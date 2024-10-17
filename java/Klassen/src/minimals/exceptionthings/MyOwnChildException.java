/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

package minimals.exceptionthings;

class MyOwnChildException extends IllegalArgumentException {
    private int zeile;
    private String method;
    private int fehlerCode;

    public MyOwnChildException(String s) {
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
        return "Fehler in " + method + "Zeile" + zeile + "Fehlercode" + fehlerCode + "\n" + super.getMessage();
    }

}
