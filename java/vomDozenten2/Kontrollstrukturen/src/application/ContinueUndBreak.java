package application;

public class ContinueUndBreak {

	public static void main(String[] args) {
		int i;
		for (i = 0; i < 5; ++i) {
			if (i == 3) {
				System.out.println("i==3; break");
				break;
			}
			System.out.println(i);
		}

		System.out.println(i);
		System.out.println("Ende");
		i = 5;
		test: for (int a = 0; a < 4; ++a) {
			switch (i) {
			case 5:
				System.out.println(i);
				break;
			}
		}

		System.out.println("test");
		
		System.out.println("vor outer");
		outer: for (int a = 0; a < 4; ++a) {
			
			System.out.println("vor middle");
			middle: for (int b = 0; b < 4; ++b) {
				
				System.out.println("vor inner");
				inner: for (int c = 0; c < 4; ++c) {
					System.out.println("in inner");
					if(c == 1) {
						break middle;
					}
					System.out.println("Ende von inner");
				}
				System.out.println("nach inner");
				
			}
			System.out.println("nach middle");
			
		}
		System.out.println("nach outer");
	}
}
