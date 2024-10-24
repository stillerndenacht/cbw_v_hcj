package application;

import java.util.Arrays;

public class MyList<T> {
	private T[] elements;
	private int index;
	
	public MyList() {
		this(3);	
	}
	
	@SuppressWarnings("unchecked")
	public MyList(int capacity) {
		super();
		elements = (T[]) new Object[capacity];
	}
	
	public void add(T element) {
		if(index == elements.length) {
			resizeElements();
		}
		elements[index++] = element;
	}
	
	public static <T> MyList<T> createListe() {
		return new MyList<T>();
	}
	
	public  MyList<T> newListe() {
		return new MyList<T>();
	}
	
	public T get(int index) {
		if(index < 0 || index >= elements.length) {
			throw new ArrayIndexOutOfBoundsException();
		}
		return elements[index];
	}
	
	private void resizeElements() {
		elements = Arrays.copyOf(elements, elements.length * 2);
		
	}
	
}
