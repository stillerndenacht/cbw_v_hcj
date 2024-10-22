package minimals.genericsthings;

import java.util.ArrayList;
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
        if (index == elements.length) {
            resizeElements();
        }
        elements[index++] = element;
    }

    public static <T> MyList<T> createList() {
        return new MyList<T>();
    }

    public MyList<T> newList() {
        return new MyList<T>();
    }

    public T get(int index) {
        if (index < 0 || index >= elements.length) {
            throw new ArrayIndexOutOfBoundsException();
        }
        return elements[index];
    }

    @SuppressWarnings("unchecked")
    public T getAll() {
        ArrayList<T> elementsArray = new ArrayList<>();
        for (T i : elements) {
            // so könnte man die null im Array verhindern
            // if (i != null) {
            //     elementsArray.add(i);
            // }
            elementsArray.add(i);
        }
        return (T) elementsArray;
    }

    private void resizeElements() {
        elements = Arrays.copyOf(elements, elements.length * 2);
    }
}
