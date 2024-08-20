import random
liste = [1, 2, 3, 4, 5, 6, 7, 8]
print(liste[1])
print(liste[-1]) # negativer Index wird von hinten gezählt

liste = [1, 2, 3, 4, 5, 6, 7, 8]
# Slicing - liste[start : ende : Richtung + Schrittweite]
print(liste[0:3])       #[1, 2, 3]
print(liste[:3])        #[1, 2, 3]
print(liste[1:-5])      #[2, 3]
print(liste[1:-3:2])    #[2, 4]
print(liste[1:-3:-2])   #[] empty weil Start, Ende rechts davon, aber Laufrichtung nach links
print(liste[-1:-8:-2])  #[8, 6, 4, 2]
print(liste[:-5:-1])    #[8, 7, 6, 5]
print(liste[::-1])      #[8, 7, 6, 5, 4, 3, 2, 1]
print(liste[5::-1])     #[6, 5, 4, 3, 2, 1]

liste2 = liste[:] # hard-copy der liste
print(id(liste), id(liste2)) # id ist unterschiedlich

# Aufgabe 10.4
print("\n -------------------- Aufgabe 10.4 --------\n")

list20 = [random.randint(1,101) for x in range(0,20)]
print(f"list20 : {list20}")
print(f"index der höchsten Zahl ({max(list20)}): ", list20.index(max(list20)))
list20low = list20[:list20.index(max(list20))]
list20high = list20[list20.index(max(list20)):]
print(f"lower side of list20 : {list20low}")
print(f"higher side of list20 : {list20high}")

# Aufgabe 10.5
print("\n -------------------- Aufgabe 10.5 --------\n")
print(" ... i skipped this ... ")