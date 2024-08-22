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


# einfache Filteroperation
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
# Sortierung: Aufsteigend nach Werten (für int und float)
# Aufsteigend nach Code point bzw. Länge des Wortes
# für andere Objekte: Implementierung des "<" Operators
# z.B. Autos können nach verschiedenen Kriterien sortiert sein
# PS, Baujahr, Preis, ... in einer Klasse kann dann eine Methode
# diese Ordnung angeben
geburtstage.sort() # Hier wird auf dem Original gearbeitet

#print(geburtstage.sort())  liefert None 
print("geburtstage.sort(): ", geburtstage)
print("sortierte_liste nach sorted: ", sortierte_liste)

# Ein Listenelement entfernen
# Welches Listenelement soll entfernt werden?
sortierte_liste.remove(44)
# Wenn das Element nicht vorhanden ist, das gelöscht werden soll,
# kommt es zu einem Fehler

test = [ 7, 7, 8, 9]
test.remove(7) # None wird zurückgegeben
print(test)

geloeschte_element = test.pop(1)
print(geloeschte_element)
# letztes Element wird entfernt
letztes_element = test.pop()
print(letztes_element)

alter.remove([5,74])

geburtstage.reverse()
print(geburtstage)
# print(type(alter[0]) is int)

#val = alter[0] is int
# print(val)
# Mehrfachzuweisung
# Operatoren

geburtstage = list(filter(lambda x: x < 60, geburtstage))
print(geburtstage)

# Filterung anhand des Datentyps
# is not filtert int raus
# alter = list(filter(lambda x: type(x) is int, alter))
# print(alter)

# In der Lambda darf nur eine Anweisung drinstehen
# map ist für die Transformierung / Abbildung in einen anderen Datentypen gedacht
# lambda x: Eingabe
# 1 Anweisung, aus dieser Anweisung wird automatisch der Wert zurückgegeben.
label = list(map(lambda x : x*2 if type(x) is int else "Kein Integer", alter))
print(label)

test = [ 7, 9, 11, 7, 11 ]
indizes = []
for i,v in enumerate(test):
    if(v == 7):
        indizes.append(i)

print(indizes)

# Funktioniert nicht, da test nicht verändert wird
label = list(map(lambda x : test.index(7) if x == 7 else "X", test))
print(label)

test.index(7) # So wie find in Strings, liefert aber nur ein Element zurück

string = "Hallo"
print(string.find('l'))

namensliste = [ "Mohsen", "Benjamin", "Claus", "Rajwant", "Matthias" ]
namensliste.sort() # Standardsortierung (code point)
print(namensliste)

# anderes Kriterium: Sortierung nach Länge des Namens
# key kann eine Lambda-Funktion sein ODER der Name einer Funktion
print(len("Johannes")) # Anzahl der Buchstaben in einem String
namensliste.sort(key=len) # len OHNE Klammer, da an dieser Stelle die Funktion
# nur weitergegeben wird, sort ruft sie dann innerhalb der Funktion sort auf
# intern geht die sort Methode alle Elemente durch, extrahiert dann die Länge und
# sortiert diese dann.
print(namensliste)

# Nach dem code Point des letzten Buchstabens sortieren. 
namensliste.sort(key=lambda x: ord(x[-1]))
print(namensliste)

# Wie viele Elemente mit dem jeweiligen Wert gibt es in der Liste?
test = [ 7, 9, 7, 65, 7, 7, 6, 2, 7]
# Wie viele 7 sind in der Liste?
print(test.count(7))

# alle 7er Löschen
# for i in range(1,test.count(7)+1): #
# for i in range(1,6): # 1, 2, 3, 4, 5 
for i in range(test.count(7)):
    test.remove(7)

print(test)

# min, max und sum
print(sum(test))
print(max(test))
print(min(test))

# Packing, Unpacking und Mehrfachzuweisung
# Packing und unpacking
liste = [1,2,3,4,5,6]

# Werte können direkt aus einer Liste einzelnen Variablen 
# zugeordnet werden
x,y,z,a,b,c = liste
print(x,y,z,a,b,c)

x, *liste = liste 
print(x, liste)

x, *liste, z = liste
print(x, liste, z)

# Mehrfachzuweisung
x, z, a = 9, 7, 2
z, x, a = a, z, x
