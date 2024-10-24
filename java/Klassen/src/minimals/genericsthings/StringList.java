package minimals.genericsthings;

import java.util.Arrays;

public class StringList {
    private String[] elements;
    private int index;

    public StringList() {
        this(3);
    }

    public StringList(int capacity) {
        super();
        elements = new String[capacity];
    }

    public void add(String element) {
        if (index == elements.length) {
            resizeElements();
        }
        elements[index++] = element;
    }

    public String get(int index) {
        if (index < 0 || index >= elements.length) {
            throw new ArrayIndexOutOfBoundsException();
        }
        return elements[index];
    }

    private void resizeElements() {
        elements = Arrays.copyOf(elements, elements.length * 2);
    }
}
