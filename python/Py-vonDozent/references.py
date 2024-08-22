# eine Liste anlegen
a = [ 8, 9 ]
# Hier wird die Speicheradresse (Referenz) auf a auch in b gespeichert
# EINE ZWEITE TÜR ZUR LISTE
b = a # Rerefenzen kopieren, NICHT den Inhalt
print("Kopie der Referenz", a is b) # TRUE, weil Adressen gleich sind. 
c = [ 7 ] # eine neue Liste
print(a is c) # False

# del a # Hier löschen wir den LINK (Referenz) zu a
# b existiert aber weiter
# a und b arbeiten auf derselben Liste
 
del a[:] # Löschen der Inhalte, aber Referenz bleibt bestehen
print(a)
print(b)


a = [ 8, 9 ]
b = a[:] # Kopie der Inhalte, also andere Speicheradresse
print ("Kopie der Liste", a is b) # False

# immutable data types
# Weil der Wert nicht änderbar ist (nur durch Neuzuweisung)
# bleibt bei immutable data types 5 an derselben Speicheradresse
# intern in Python abgehandelt
a = 5
b = 5
print("Immutable Data Types int: ", a is b) # True 
# es werden id s verglichen

s_a = "Hallo"
s_b = "Hallo"
print("Immutable Data Types string: ", s_a is s_b) # True 

# mutable data types
# Hier werden zwei physikalisch unterschiedliche Listen erzeugt
l_a = [7,8]
l_b = [7,8]
print("Mutable Data Types: ", l_a is l_b) # False

l_a = l_b
print(l_a is l_b) # True

l_a = l_b[:] # Neuzuweisung, l_a und l_b andere ID
print(l_a is l_b) # False

# immiutable: same content = same id
# mutable: always different id, only if you set l_a = l_b 
# we have two references in the SAME memory => id is the same