# Hier wird alles importiert, alle Namen und Symbole 
# Man kann nach der Vergabe eines Alias nur mit dem Aliasnamen auf Module
# zugreifen.
import module1 as m1 # Alias

m1.greet()
print(m1.a)
# module1.a

a = 10 # lokale Variable in Modul 3
m1.a = 4 # Zuweisung auf eine Variable in Modul 1

print(a, m1.a)

