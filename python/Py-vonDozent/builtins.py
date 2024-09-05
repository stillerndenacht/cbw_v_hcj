liste = [ 10, 20, 8, 5 , 2, 1, 12 ]
 
liste_ueber_10 = filter(lambda x: x >= 10, liste)
print(list(liste_ueber_10))
 
 
liste_ascii = [65, 66, 78, 89, 99, 101, 116]
print([chr(x) for x in liste_ascii]) # ['A', 'B', 'N', 'Y', 'c', 'e', 't']




# Beispiele für Builtin-Funktionen
 
# 1: konvertierung int zu binärzahl (als String)
 
print(f"Binarzahl 42 (bin(42)): {bin(42)}") #bin(42)
 
# 2: Ganzzahldivision in Kombination mit Rest (Ausgabe als Tupel)
# // und %
print(f"divmod(16, 5): {divmod(16, 5)}")
 
# 3:Beispiele für Formatierungen
 
# Kommazahl auf 2 Nachkommastellen beschränken:
# es wird automatisch gerundet
print(f"{42.6565:.2f}")
 
# mit format:
 
print(f"{format(42.6565, '.2f')}")
 
# Große Zahl mit "_" aufspliten:
print(f"{1234567890:_d}")
print("{:_d}".format(1234567890))
 
 
# 4: reverse iterator
 
listen = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
for i in reversed(listen):
    print(i)
 
 
# 5: zip fasst mehrere Iterables zusammen (in einem zip object) und gibt gleiche Indexwerte als Tupel aus
 
list1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
list2 = [11, 12, 13]
 
for i in zip(list1, list2):
    print(i)


#frozenset([iterable])
my_list = [1, 2, 3, 2]
sets = { 1,2,3,2 }
# sets.add(7)
# frozen set kann nicht erweitert werden oder gelöscht werden
frozen_set = frozenset(my_list)

print(frozen_set)  # Output: frozenset({1, 2, 3})
 
print('#################')
#locals()
def my_function():
    x = 10
    y = 20
    print(locals()) # introspection
 
my_function() #{'x': 10, 'y': 20}
 
#enumerate(iterable, [start])
my_list = ["apple", "banana", "cherry"]
 
# Iterate over a list
for index, fruit in enumerate(my_list):
    print(index, fruit)
 
# Iterate over a string
for index, char in enumerate("hello"):
    print(index, char)
    '''
    output list
    0 apple
    1 banana
    2 cherry
   
    output string
    0 h
    1 e
    2 l
    3 l
    4 o
    '''
# Globale Variable
x = 10
 
def my_function():
    # Zugriff auf die globale Variable
    global x
    x = x + 1
    print(x)
 
my_function()  # Ausgabe: 11
 
#nonlocal
def outer_function():
    x = 10
 
    def inner_function():
        nonlocal x
        x += 1
        print("Inner function:", x)
 
    inner_function()
    print("Outer function:", x)
 
outer_function()#Inner function: 11 -Outer function: 11


mathematische_ausdruecke = ["2 + 3", "10 - 5", "7 * 6", "20 / 4", "15 % 4"]
# eval ist die "Python-Konsole"
evaluierte_ergebnisse = list(map(lambda ausdruck: eval(ausdruck), mathematische_ausdruecke))
 
gefilterte_ergebnisse = list(filter(lambda x: x >= 5, evaluierte_ergebnisse))
 
max_ergebnis = max(gefilterte_ergebnisse)
 
print("Mathematische Ausdrücke:", mathematische_ausdruecke)
print("Berechnete Ergebnisse:", evaluierte_ergebnisse)
print("Gefilterte Ergebnisse: (größer oder gleich 5):", gefilterte_ergebnisse)
print("Maximaler Wert:", max_ergebnis)


my_tupel = tuple(["Apple", "Banana", "Kiwi", "Mango", "Grapes"])

first_element = my_tupel[0]
last_element = my_tupel[-1]
 
print(first_element , last_element)


zahlen = [9, 25, 36, 49, 64, 81, 100] # Liste mit Zahlen, aus denen sich gut die Wurzel ziehen lässt
 
wurzel = list(map(lambda x: (x**(1/2)), zahlen)) # x**(1/2) = Wurzel von x

print(wurzel) # Ausgabe der Liste der Wurzeln

import math
wurzel = list(map(lambda x: math.sqrt(x), zahlen)) # x**(1/2) = Wurzel von x

print(wurzel) # Ausgabe der Liste der Wurzeln

# Es kann flexibel eine Funktion gegeben werden, esmuss nicht notwendigerweise
# eine lambda sein !
wurzel = list(map(math.sqrt, zahlen)) # x**(1/2) = Wurzel von x

print(wurzel) # Ausgabe der Liste der Wurzeln



def sqrt_newton(x, epsilon=1e-10):
    guess = x / 2
    # epsilon ist Annäherung !
    while abs(guess * guess - x) > epsilon:
        guess = (guess + x / guess) / 2
    return guess

print(sqrt_newton(4))
print(sqrt_newton(3))





A = True
B = False
C = True
 
print(any([A, B, C])) # any() prüft im Grunde, ob mindestens ein Element True ist
print(all([A, B, C])) # all() prüft im Grunde, ob alle Elemente True sind

logicals = [A,B,C]
# Gut verwendbar in if-Anweisungen und bei while Schleifen !
# A and B and C => all(A,B,C)
# A or B or C => any(A,B,C)
while all( [ A,B,C ] ) == False:
    B = True
    print("Durchlauf")

print("Ende")

logicals.append(A or C)
while all( logicals ) == False:
    B = True
    print("Durchlauf")

print("Ende")
