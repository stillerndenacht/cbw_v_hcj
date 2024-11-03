package minimals.enumthings;

public enum OperatorEnum {
PLUS{public double operate(double wert1, double wert2){return wert1 + wert2;}}, 
MINUS{public double operate(double wert1, double wert2){return wert1 - wert2;}}, 
DIV{public double operate(double wert1, double wert2){return wert1 / wert2;}}, 
MULT{public double operate(double wert1, double wert2){return wert1 * wert2;}};
public abstract double operate(double wert1, double wert2);
}
