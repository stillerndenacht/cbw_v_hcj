import random
# Aufgabe 10.6
print("\n -------------------- Aufgabe 10.6 --------\n")

quadratwurz = [x**(1/2) for x in range(1, 11)]
print(f"Liste der Quadratwurzeln : {quadratwurz}")

list20 = [random.randint(1,1000) for x in range(0,20)]
print(f"ursprüngliche Liste : \t{list20}")
list20even = [x for x in list20 if x % 2 == 0]
list20odd = [x for x in list20 if x % 2 != 0]
print(f"Auszug der geraden : \t{list20even}")
print(f"Auszug der ungeraden : \t{list20odd}")