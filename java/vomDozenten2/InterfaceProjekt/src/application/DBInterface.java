package application;

import java.util.List;

public interface DBInterface {
	public static final int X = 10;
	void saveRechteck(Rechteckmy r);
	public abstract Rechteckmy getRechteck(int id);
	public abstract List<Rechteckmy> getAll();
}
