package minimals;

public class TestsBuch {

    public static void main(String[] args) {
        System.out.println("------& with byte --------");
        byte by1 = 1;
        byte by2 = 2;

        System.out.println("by1 : " + Integer.toBinaryString(by1));
        System.out.println("by2 : " + Integer.toBinaryString(by2));
        byte b = (byte) (by1 & by2);
        System.out.println("b : " + Integer.toBinaryString(b));
        System.out.println(b);
        System.out.println("------ & with int --------");
        int i1 = 1;
        int i2 = 2;

        System.out.println("i1 : " + Integer.toBinaryString(i1));
        System.out.println("i2 : " + Integer.toBinaryString(i2));
        int i = (int) (i1 & i2);
        System.out.println("i : " + Integer.toBinaryString(i));
        System.out.println(i);

        System.out.println("------| with byte --------");
        byte by3 = 1;
        byte by4 = 2;

        System.out.println("by3 : " + Integer.toBinaryString(by3));
        System.out.println("by4 : " + Integer.toBinaryString(by4));
        byte bor = (byte) (by3 | by4);
        System.out.println("bor : " + Integer.toBinaryString(bor));
        System.out.println("-bor : " + Integer.toBinaryString(-bor));
        System.out.println(bor);

        System.out.println("------ ^ with byte --------");
        byte by5 = 1;
        byte by6 = 2;

        System.out.println("by5 : " + Integer.toBinaryString(by5));
        System.out.println("by6 : " + Integer.toBinaryString(by6));
        byte bxor = (byte) (by5 ^ by6);
        System.out.println("bxor : " + Integer.toBinaryString(bxor));
        System.out.println("-bxor : " + Integer.toBinaryString(-bxor));
        System.out.println(bxor);

        System.out.println("------ String + boolean --------");
        String str = "true or false : ";
        boolean boo = true;

        String strboo = str + boo;
        String boostr = boo + str;

        System.out.println("strboo : " + strboo);
        System.out.println(str + boo);
        System.out.println(strboo.length());
        System.out.println(strboo.substring(strboo.length() - 4));

        System.out.println("boostr : " + boostr);
        System.out.println(boo + str);
        System.out.println(boostr.length());
        System.out.println(boostr.substring(boostr.length() - 4));

        System.out.println("----------- Integer == Double ---------");
        int integer = 10;
        Integer integer2 = 10;
        double dou = 10.0;
        Double dou2 = 10.0;

        System.out.println("integer == integer2 : " + (integer == integer2)); // true
        System.out.println("dou == dou2 : " + (dou == dou2)); // true
        System.out.println("integer == dou : " + (integer == dou)); // true
        //System.out.println("integer2 == dou2 : "+(integer2 == dou2)); // geht nicht
        System.out.println("integer2.equals(dou2) : " + integer2.equals(dou2)); // geht, aber false
        System.out.println("integer2 == dou : " + (integer2 == dou)); // true

        System.out.println("--------S.129 Operator-Prezedenz ----");
        String str1 = "7" + 5 + 10;
        System.out.println("\"7\"+ 5 + 10 : " + str1);
        String str2 = 7 + 5 + "10";
        System.out.println("7+ 5 + \"10\" : " + str2);
        String str3 = "7" + (5 + 10);
        System.out.println("\"7\"+ (5 + 10) : " + str3);
        System.out.println(" -----------");
        int m = 50;
        System.out.println("int m = 50 : " + m);
        int n = ++m;
        System.out.println("int n = ++m: " + n);
        int o = m--;
        System.out.println("int o = m-- : " + o);
        int p = --o + m--;
        System.out.println("int p = --o+m-- : " + p);
        int x = m < n ? n < o ? o < p ? p : o : n : m;
        System.out.println("int x = m<n?n<o?o<p?p:o:n:m : " + x);
        System.out.println(" -----------");
        int k = 4;
        boolean flag = k++ == 5;
        flag = !flag;
        System.out.println("flag : " + flag);
System.out.println(" -----------");
        byte b1 = 1;
        //b1 = byte b1<<1; // so geht das nicht weil der Operator implizit auf int castet
        b1 = (byte) (b1 << 1);
        System.out.println("b1 = (byte) (b1<<1) : " + b1);
        int c = b1 << 1;
        System.out.println("int c = b1<<1 : " + c);
        // byte d += b1;
        byte e = 0;
        e += b1;
        System.out.println("e += b1 : " + e);

    }
}
