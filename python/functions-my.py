# Definition der Funktion
def greet():
    print("Halloo die Funktion grüßt dich!")
# Aufruf der Funktion
greet()

# ab hier wird greet übeschrieben/ neu definiert
# Übergabe von Variablen
def greet(name):
    print(f"Halloo {name}, die Funktion grüßt dich!")
# Aufruf der Funktion
greet("Du")
# jetzt muss die Funktion ein Argument enthalten
# greet() - geht nicht mehr

# Definition mehrerer Parameter
def addition(x, y):
    z = x + y
    print(f"Ergebnis aus {x} + {y} = {z}")
# Übergabe der Argumente
addition(3, 5)

# Definition eines Default-Wertes
def addition(x, y, a=0):
    z = x + y
    print(f"Ergebnis aus {x} + {y} + {a} = {z}")
addition(3, 5)
addition(4, 6, 2)
addition(a=10, y=3, x=5)
# positionale Argumente müssen am Anfang stehen, sobald sie mit Name übergeben werden ist positional nicht mehr möglich
addition(1, y=3, a=6) # addition(1, y=3, 6) geht nicht

# Definition eines Rückgabewerts
def addition(x, y):
    z = x + y
    return z
print("Hier kommt nur der Return-Wert: ",addition(1,2))

def addition(x, y):
    return x + y
print("Hier kommt nur der Return-Wert ohne ihn irgendwo zu speichern: ",addition(2, 3))
def multiplikation(a,b):
    return a*b
# man kann Funktionen ineinander schachteln
print(addition(multiplikation(2,3),3))

def wenn(a,b):
    if a < 10:
        return a * b
    
print("wenn(9, 2) :",wenn(9, 2))
print("wenn(11, 2) :",wenn(11, 2))

# Rückgabe meherer Werte 
def viele(a,b):
        return a * b, a + b, a/b # Rückgabe als Tupel (8, 6, 0.5)
print(viele(2, 4)) # (8, 6, 0.5)

def vielereturn(a,b):
        return a * b
        return  a + b
        return a/b # Rückgabe funktioniert nur einmal 
print(vielereturn(2, 4)) # Ausgabe nur 8

# Rückgabe als Liste
def vielealsliste(a,b):
        x = a * b
        y = a + b
        z = a/b
        return [x, y, z]
print(vielealsliste(2,4))

def vielealsliste(a,b):        
        return [a * b, a + b, a/b]
print(vielealsliste(2,4))

# definition eines Tupels als argument *args - ist das Tupel
def summieren(a, *args):
    summe = a
    for elem in args:
          summe += elem
    return summe
print(summieren(5,1,2,3,4,5)) # alles nach 5 ist das Tupel

# namen = {"vor": "max", "nach": "muster"}
def dictfunct(**namen):
     for key, val in namen.items():
          print(key)
          print(val)

dictfunct(vor="max", nach="muster", vorr="max", nachh="muster")

# so funktioniert es Tupel mit Dictionarys zu kombinieren
# so würde es nicht gehen - def tupeldict(*tup, **dict):
def tupeldict(tup, dict):
     #print(tup) 
     #print(dict)        
     for key, val in dict.items():
          #print(key)
          #print(val)
          if val in tup:
               print("key :",key, "; val :",val)

tupx = 100,200,300,
dictx = {"miete1" : 100, "miete2": 300, "miete3" : 400}
#print(dictx)
tupeldict(tupx, dictx)

# aber so - mit einer anderen argument-übergabe funktioniert es schon
def tupeldict2(*tup, **dict):          
     for key, val in dict.items():         
          if val in tup:
               print("key2 :",key, "; val2 :",val)
# Übergabe der Argumente in einer Liste
tupeldict2(100,200,300, miete1= 100, miete2= 300, miete3= 400)