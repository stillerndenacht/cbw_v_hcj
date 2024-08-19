# Variablen, die einer Liste zugewiesen werden, sind Referenzen
liste = [ 8, 9, 10 ]

# Listen-Methoden zur Manipulation
alter = [42, 35, 27, 19, 44]

# Weitere Elemente hinzufügen
alter.append(60)
print(alter)

# Mehrere Elemente gleichzeitig hinzufügen nicht möglich mit append
# alter.append(60,70)

# Hier fügen wir eine Liste ein, die aber in der Liste
# nur EIN Element ist
# In Python kann ich verschiedene Datentypen in einer Liste mischen.
alter.append([5,74])
print(alter)

alter.append("Hallo")
print(alter)

# wie kann ich auf die Listenelemente zugreifen
print(alter[0]) # 42
print(alter[4]) # 44
print(alter[6], type(alter[6])) # [5, 74]

# Wie kann ich auf die 74 zugreifen als einzelnen Wert
print(alter[6][1], type(alter[6][1])) # 74

# len ist auf Listen und Strings definiert
print("Länge der Liste: ", len(alter[6])) # type: List
print("Länge des Strings: ", len(alter[7])) # type: string ("Hallo")

# Wie können wir Elemente beschreiben?
# Person 0 hat Geburtstag
alter[0] += 1
# Person 1 ist in den Jungbrunnen gefallen
alter[1] = 22

print(alter[0], alter[1])

# Wie kann ich Elemente an einer bestimmten Stelle einfügen
# insert
alter.insert(2, 54) # an der Stelle 2 einfügen, alles andere
# verschiebt sich um einen Index nach hinten
print(alter)

# Wie füge ich eine neue Liste an Stelle 4 ein und wie sieht die gesamte Liste aus?
alter.insert(4,[])
print(alter)

alter.insert(4,[15])
print(alter)

# Wie füge ich nun in diese neue, leere Liste etwas nachträglich ein?
alter[5].append("Bald")
print(id(alter[5]))
# Mit neuer Liste überschreiben
alter[5] = [ "Bald", "ist", "Weihnachten" ] # Neuzuweisung !!
print(id(alter[5]))
print(alter)
print(alter[5])

# Unterschied zu JavaScript:
# In javaScript würden alle Zwischenelemente mit undefined aufgefüllt werden
# In Python erzeugt diese Zuweisung einen Fehler IndexError
# alter[50] = "Oh je"

# Mehrere Elemente gleichzeitig hinzufügen
# Hier wird jedes Listenelement EINZELN eingefügt
alter.extend([74, 78])
# Unterschied zu append: Hier wird die Liste als Ganzes eingefügt und 
# als ein Element
alter.append([74, 78])
# print(alter)

for index,value in enumerate(alter):
    print(index, value, sep=': ')

# Wie feiern alle Geburtstag?
for index,value in enumerate(alter):
    # if type(alter[index]) is int:
    if type(value) is int:
        # Erlaubt Änderung auf Original
        alter[index] += 1
        print(alter[index])
        print(index)
        # value ist eine temporäre Kopie des Listenelements
        # Kein direkter Zugriff aufs Original
        value += 1

# print(alter)

for index,value in enumerate(alter):
    print(index, value, sep=': ')


# Index kann auch so aufgebaut werden:
# range(0, len(alter),1)
for index in range(0, len(alter),1):
    print(index, alter[index], sep=': ')


geburtstage = []
for index,value in enumerate(alter):
    # if type(alter[index]) is int:
    if type(value) is int:
        # Erlaubt Änderung auf Original
        geburtstage.append(value)

# Vergleichen von int mit list und string nicht möglich
# sortierte_liste = sorted(alter)
# print(sortierte_liste)

# HIER sind nur int Werte, die sortiert werden
# sorted sortiert die Liste und gibt eine neue, sortierte Liste zurück. 
sortierte_liste = sorted(geburtstage)
# Original ist nicht verändert worden
print("sorted geburtstage: ", geburtstage)
# geburtstage.sort() sortiert die Liste direkt und gibt None zurück
geburtstage.sort()
print(geburtstage.sort()) # liefert None 
print("geburtstage.sort(): ", geburtstage)
print("sortierte_liste nach sorted: ", sortierte_liste)


# print(type(alter[0]) is int)

#val = alter[0] is int
# print(val)
# Mehrfachzuweisung
# Operatoren
