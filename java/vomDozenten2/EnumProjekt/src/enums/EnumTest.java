package enums;
import static enums.Stockwerk.*;

public class EnumTest {

	public static void main(String[] args) {
		Aufzug aufzug = new Aufzug();
		aufzug.stockwerk = Stockwerk.OG3;
		
		for(Stockwerk st : Stockwerk.values()) {
			System.out.print(st.ordinal() + ", ");
			System.out.print(st.name() + "   ");
			System.out.print(st.getBezeichner() + "  ");
			System.out.println(st.getFarbe());
		}
		
		aufzug.stockwerk = UG5;
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);
		aufzug.stockwerk = aufzug.stockwerk.next();
		System.out.println(aufzug.stockwerk);

	}

}
