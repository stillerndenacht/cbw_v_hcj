import klassen_uebung1

# Es existieren in klassen_uebung1 zwei Klassendefinitionen Person.
# Nach außen hin gilt die Klasse, die zuletzt definiert wurde,
# weil klassen_uebung1 bei der import-Anweisung vollständig durchlaufen wird.
p1 = klassen_uebung1.Person()
print(p1.name)

p2 = klassen_uebung1.Person("Matthias", "H", "42")
# print(p2.vorname)