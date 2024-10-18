package application;

import java.util.List;

public interface DBInterface {
	public static final int X = 10;
	void saveRechteck(Rechteck r);
	public abstract Rechteck getRechteck(int id);
	public abstract List<Rechteck> getAll();
}
