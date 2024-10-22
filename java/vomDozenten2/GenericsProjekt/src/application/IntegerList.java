package application;

import java.util.Arrays;

public class IntegerList {
	private Integer[] elements;
	private int index;
	
	public IntegerList() {
		this(3);	
	}
	
	public IntegerList(int capacity) {
		super();
		elements = new Integer[capacity];
	}
	
	public void add(Integer element) {
		if(index == elements.length) {
			resizeElements();
		}
		elements[index++] = element;
	}
	
	public Integer get(int index) {
		if(index < 0 || index >= elements.length) {
			throw new ArrayIndexOutOfBoundsException();
		}
		return elements[index];
	}
	
	private void resizeElements() {
		elements = Arrays.copyOf(elements, elements.length * 2);
		
	}
	
}
