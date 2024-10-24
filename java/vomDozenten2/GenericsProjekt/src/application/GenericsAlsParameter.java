package application;

import java.util.ArrayList;
import java.util.List;

public class GenericsAlsParameter {
	public static void main(String[] args) {
		List<Animal> animals = new ArrayList<>();
		List<Dog>    dogs = new ArrayList<>();
		List<Cat> cats = new ArrayList<>();
		Animal animal = new Animal();
		Dog dog = new Dog();
		Cat cat = new Cat();
		
		animals.add(animal);
		animals.add(dog);
		animals.add(cat);
		
		dogs.add(dog);
		cats.add(cat);
		
		impfen(animal);
		impfen(dog);
		impfen(cat);
		System.out.println("\n===================================\n");
		impfen(animals);
		impfen(dogs);
		vermehren(animals);
		vermehren(new ArrayList<Object>());
//		vermehren(cats);
		
	}
	
	public static void impfen(Animal animal) {
		animal.impfen();
	}
	
	public static void impfen(List<? extends Animal > animals) {
//		animals.add(new Cat());
		for(Animal a : animals) {
			a.impfen();
		}
	}
	
	public static void vermehren(List<? super Animal> animals) {
		animals.add(new Animal());
		animals.add(new Dog());
		animals.add(new Cat());
	}
	
	
	
}
