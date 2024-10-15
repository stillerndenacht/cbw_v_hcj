package minimals.wrapper2;

public class Wrapper {

    @SuppressWarnings("removal") // sorgt dafür dass die Deprecated-Warnung für diese Java8-Verwendung der
                                 // Integer-Wrapper-Class unterdrückt wird
    public static void main(String[] args) {
        System.out.println("Wrapper Start");
        Integer integer = new Integer(45);
        int i = integer.intValue();
        int i2 = 7;
        Integer integer2 = Integer.valueOf(i2);
        System.out.println("integer : "+integer);
        System.out.println("i : "+i);
        System.out.println("i2 : "+i2);
        System.out.println("integer2 : "+integer2);

        for (String s : args) {
            System.out.println(s);
            System.out.println("Wrapper");
            }

            // System.out.println(args[0] + args[1]);
            // System.out.println(args.length);

            // int arg0 = Integer.parseInt(args[0]);
            // int arg1 = Integer.parseInt(args[1]);
            // System.out.println(arg0 + arg1);
            // System.out.println(args[0] + "+" + args[1] + " = " + (arg0 + arg1));
        
    }

}
