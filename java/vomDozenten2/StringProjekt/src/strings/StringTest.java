package strings;

public class StringTest {

	public static void main(String[] args) {
		String hallo = "Hallo";
		String welt = "         Welt       ";
		String text = hallo.concat(" Welt");
		
		System.out.println(hallo);
		System.out.println(text);
		System.out.println(welt);
		text = welt.trim();
		System.out.println(text);
		text = hallo.replace("all", "test");
		System.out.println(hallo);
		System.out.println(text);
		
		text = hallo.substring(1, 2);
		System.out.println(hallo);
		System.out.println(text);

		System.out.println(hallo.charAt(3));
		
		System.out.println(hallo.length());
		
		System.out.println(hallo.startsWith("ll", 2));
		System.out.println(hallo.endsWith("llo"));
		text = "HalloWeltHalloWeltHalloWelt";
		
		String erg = text.replaceAll("ll", "BB");
		System.out.println(text);
		System.out.println(erg);
		System.out.println(text.lastIndexOf('l'));
		System.out.println(text);
		StringBuilder sb = new StringBuilder("Hallo");
		System.out.println(sb);
		text = sb.reverse().substring(2);
		System.out.println(sb);
		System.out.println(text);
	}

}
