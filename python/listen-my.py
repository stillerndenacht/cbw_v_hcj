import random
alter = [1, 2, 3, [5, 6]]
print(alter)
for i in range(0, len(alter), 1):
    if type(alter[i]) is int:
        alter[i] += 1
    else:
        print("Hier geht's nicht", alter[i])
print(alter)

liste = [1, 2, 3]
print(liste)
liste.insert(2, 4)
print(liste)
liste.append([4, 5])
print(liste)
print(liste[4][1])
print(id(liste))
a = 4
print(id(a))
print(id(liste[4][0]))

# Aufgabe 10.1
print("\n--------------Aufgabe 10.1 Palindrome----------\n")
palinpala = [
    "Anna",
    "Otto",
    "Harald",
    "Gerald",
    "Friedwald",
    "sator arepo tenet opera rotas",
]
print(f"palinpala : {palinpala}")
palindrome = []
for i in range(len(palinpala)):
    palinpala_x = palinpala[i]
    palapalin = ""
    for j in range(len(palinpala_x) - 1, -1, -1):
        palapalin += palinpala_x[j]
        # print(palapalin)

    if palinpala[i].lower() == palapalin.lower():
        palindrome.append(palinpala[i])
        # print(palindrome)
print(f"palindrome : {palindrome}")

# Aufgabe 10.2
print("\n--------------Aufgabe 10.2----------\n")
waternums = [1.2, 4.6, 0.5, -3.5, -0.8, 5.8, 6.7, 9.8, 2.5, 6.6]
print(len(waternums))
print(f"ursprüngliche Liste : {waternums}")

waternumsort = sorted(waternums)
print(f"Sortierte Kopie mit sorted : \t\t\t\t{waternumsort}")
waternumsortrev = waternumsort # Referenz aufs Original
waternumsortrev2 = waternumsort[:] # Kopie gezogen
waternumsortrev.reverse() # das Wenden dreht auch das Original
waternumsortrev2.reverse() # hier wird nur die Kopie gedreht
print(f"Sortierte Kopie der Kopie gewendet mit reverse() :\t{waternumsortrev}")
print(f"Die erste Kopie wird mit gewendet =( :\t\t\t{waternumsort}")
print(f"Außer man zieht die Kopie so waternumsort[:] :\t{waternumsortrev2}")

waternums2 = list(filter(lambda x: not 0 < x < 1, waternums))
print(f"Element zwischen 0-1 entfernt :\t\t{waternums2}")
waternumfirst = waternums.pop(0)
print(f"erstes Element weg vom Original :\t{waternums}")
waternums.append(waternumfirst)
print(f"erstes Element hinten ans Original :\t{waternums}")

# waternums3 = list(map(lambda y: abs(y), waternums))
# print(f"Elemente auf absolute Werte gewandelt :\t{waternums3}")

waternums4 = sorted(map(lambda y: abs(y), waternums))
print(f"Elemente nach absoluten Werten sortiert  :\t{waternums4}")
print(waternums)


# Aufgabe 10.3 Zahlen können auch mehrfach gezogen werden
print("\n--------------Aufgabe 10.3 Lotto----------\n")
lotto = []
for i in range(0, 6):
    x = random.randint(1, 49)
    lotto.append(x)
    print(lotto)
print(lotto)