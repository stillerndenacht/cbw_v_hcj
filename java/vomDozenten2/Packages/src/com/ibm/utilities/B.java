package com.ibm.utilities;

import application.A;

public class B extends A{
	private int xyz = 100;
	
	public void test() {
		A aObject = new A();
		B bObject = new B();
		System.out.println("a: " + aObject.a);
		System.out.println("b: " + aObject.b);
		System.out.println("c: " + aObject.c);
		System.out.println("c: " + c);
		System.out.println("c: " + bObject.c);
		System.out.println("d: " + aObject.d);
	}
}
