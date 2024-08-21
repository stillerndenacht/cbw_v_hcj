#Eine Menge (engl. set) ist eine ungeordnete Sammlung von Elementen,
#in der jedes Element nur einmal enthalten sein darf!!!
#set ist  mutabel
#frozenset immutabel


x=set([1, 2, 3])
print(x)

# darf nur immutabel elmente enthalten
# geht nicht
#set([1, 2, list()])

# leeres set 
set()# mutabel

# leeres frozenset
frozenset()# imutabel

#Erstellung mit Inahlt:
set(("A", "B", "C"))
print(frozenset([True, 47, (1,2,3),]))
print(frozenset((1,2,3,4,)))


#Diese Schreibweise bringt ein Problem mit sich: Da die geschweiften Klammern bereits
#für Dictionarys verwendet werden, ist es mit diesem Literal nicht möglich, eine
#leere Menge zu erzeugen – {}
s = {1, 2, 3, 99, -7}


#Iteration
# Wir sehen das es keine reinfolge gibt
menge = {1, 100, "a", 0.5}
for element in menge:
    print(element)


#Operatoren gelte für set und frozenset
#kann man also übertragen 

s = {0,1,2,3,4,5,6,7,8,9}
# Zweites set 
t = {6,7,8,9,10,11,12,13,14,15}


print(s)
#Länge
print(len(s))

# in
print(2 in s)
print(10 not in s)
print(max(s))



#teil mengen
s = {0,1,2,3,4,5,6,7,8,9} 
# Zweites set 
t = {6,7,8,9,10,11,12,13,14,15}
print("\n Teilmengen:")
u = {4,5,6}




print(u <= s) # u ist eine teilmenge von s  da alle ellemente auch in s enthalten sind
print(u < s) # u ist eine echte teilmenge da nicht identisch mit s
print(u >= s)
print(u <= t)

print("reinfolge wichtig ?\n")
# teilmenge und echte teilmenge
m = {1,3, 2}
n = {1,2,3}
print(m <= n)
print(m < n)

print({1,2}& {3,4}) #set()



#Vereinigung zweier Mengen
print("\nVereinigung zweier Mengen")
print(s | t)


#Schnittmenge 
print("Schnittmenge ",s & t)

#teil mengen
s = {0,1,2,3,4,5,6,7,8,9} 
# Zweites set 
t = {6,7,8,9,10,11,12,13,14,15}
#Differenz zweier Mengen
#
print("Differenz",s - t)

# Symmetrische Differenz zweier Mengen
print("Symmetrische Differenz",s ^ t)


s.issubset(t)# äquivalent zu s <= t
s.issuperset(t) #äquivalent zu s >= t
s.isdisjoint(t)# Prüft, ob die Mengen s und t disjunkt sind, das heißt, ob sie eine leere Schnittmenge haben.
s.union(t)# äquivalent zu s | t
s.intersection(t)# äquivalent zu s & t
s.difference(t) #äquivalent zu s - t
s.symmetric_difference(t)#äquivalent zu s ^ t

# ein unterschied ist ,dass bei Verwendung der Operatoren beide Operanden set oder
# frozenset-Instanzen sein müssen, während die Methoden für den Parameter t
# einen beliebigen sequenziellen Datentyp akzeptieren

#{1,2,3} | "ABC"

print("\nunion")
print({1,2,3}.union("ABC"))
print()

#Eine Kopie eines Sets erzeugen Sie mit der Methode copy:
m = s.copy()
print("copy von s:",m)

#Wichtig ist, dass nur die Menge selbst kopiert wird. Bei den enthaltenen Elementen
#handelt es sich sowohl in der ursprünglichen Menge
print(m is s)
print(m==s)


# set ist wie gesagt veränderbar (mutabel)
#hat deswegen einige methoden  die frozenset nicht besitzt 
#diese kennen wir schon 
s = {1,2,3,4,5}
s.add(6)
print(s)
s.add(6)# jedes elment kann nur einmal enthalten sein
print(s)



s = {1,2,3,4,5}
s.clear()
print(s) #set()

#discard löscht ein element  
# anders als remove gibt es keine fehlermeldung wenn das Element nicht vorhanden ist 
s = {1,2,3,4,5}
s.discard(17) 

s = {1,2,3,4,5}
s.remove(5)

# führt zu fehler
#s.remove(6)


# Innerhalb eines Dictionarys kann ein frozenset als Schlüssel verwendet werden
d = {frozenset([1,2,3,4]): "Hello World"}
print(d)