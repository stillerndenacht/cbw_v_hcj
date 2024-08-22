import math
# Aufgabe 21.8 Tupel-Aufteilung
print("\n-------------Aufgabe 21.8 Tupel-Aufteilung---------\n")
tup = (1, 2, 3 ,4 ,5 ,6, 7, 8, 9, 10)
print("das Tupel : ",tup)

print("\n-------------einfache Variante---------\n")

a, b, c, d, e, f, *drei, = tup
eins = [a, b, c]
zwei = [d, e ,f]

print(f"eins : {eins}\nzwei : {zwei}\ndrei : {drei}")

print("\n-------------Variante über einen Loop mit beliebiger Tupellänge---------\n")
teil = math.floor(len(tup)/3)
print("teilung : ",teil)
eins2 = []
zwei2 = []
drei2 = []
for x in range(len(tup)):
    if x < teil:
        # print("für eins2",x)
        eins2.append(x)
    elif x >= teil and x < teil*2:
        # print("für zwei2", x)
        zwei2.append(x)
    else:
        # print("für drei2", x)
        drei2.append(x)

print(f"eins2 : {eins2}\nzwei2 : {zwei2}\ndrei2 : {drei2}")

# die listen ver-tupeln
eins3 = tuple(eins2)
zwei3 = tuple(zwei2)
drei3 = tuple(drei2)

print("\nund jetzt wieder ver-tupelt\n")
print(f"eins3 : {eins3}\nzwei3 : {zwei3}\ndrei3 : {drei3}")
# die id's /Speicherplätze der tupel/listen unterscheiden sich
print(id(tup), id(eins), id(eins2), id(eins3))
# die id's der Elemente sind nicht zwingend unterschiedlich
print(id(tup[0]), id(eins[0]), id(eins2[0]), id(eins3[0]))