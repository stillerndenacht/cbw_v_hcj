# lambda : Kleine, anonyme Funktionen in Python
# Im Gegensatz zu JavaScript haben Eingabeparameter, dann EINE Anweisung
# Das Ergebnis dieser Anweisung ist gleichzeitig der Rückgabewert

# lambda: <Eingabe> : <Anweisung>, Anweisung ist auch Rückgabe

# Hier hat die Funktionen KEINEN NAMEN
lambda a,b: a+b  

# Wie rufe ich die Lambda-Funktion auf?
# Wir brauchen einen Namen als Referenz 
addiere = lambda a,b: a+b
print(type(addiere)) # <class function>

print(addiere(4,5))
addiere2 = addiere # Zwei Referenzen auf eine Lambda-Funktion
# Verwendung (Aufruf) wie bei normalen Funktionen

# Funktionen sind mutable, beide Referenzen verweisen auf dieselbe Adresse
print("Beide Referenzen gleich?:", addiere is addiere2) # True

print(addiere2(7,8))

a = 9; b = 6
addiere3 = lambda : a+b # globaler Scope

liste = [8, 9, 10, 12]
# Alles > 10 filtern
# Wie teile ich dem "Framework" mit, dass ich diese Werte filtern möchte?
neue_liste = []
for i in liste:
    if i > 10:
        neue_liste.append(i)

# Es geht auch viel einfacher:
# Wir brauchen für filter eine Funktion, die die Filterlogik implementiert.
# Hier wird eine Funktion erwartet, die True oder False zurückgibt
# filtered ist ein Filterobjekt, das von filter zurückkommt
# Erstes Argument ist lambda Funktion ODER eine Funktionsreferenz
# Die Lambda Funktion erhält einen Input-Paprameter, das das
# Listenelement repräsentiert und einen Vergleich
# Innerhalb von filter() wird diese lambda Funktion aufgerufen
# Funktion als Parameterübergabe ! (Anleitung, die ich an das Framework gebe)
filtered = filter(lambda x: x > 10, liste)
print(list(filtered)) # Konvetierung von dem Filter-Objekt in eine Liste

# Verdoppeln aller Listenelemente
# "Tranformation"
filtered = map(lambda x: x*2, liste)
print(list(filtered))

# Damit man sortieren kann, muss ich zwei Elemente miteinander vergleichen können
# sorted nutzt intern Schleifen und ruft viele Einzelvergleich auf
# Diese Einzelvergleiche erfolgen unter Verwendung der lambda
# Das ist UNSER Kriterium, was WIR angeben.
# key ist optional, wenn nichts übergeben wird, 
# dann nutzt es die Standardsortierung aufsteigend
sortierte_liste = sorted(liste)
print(sortierte_liste)

# Beispiel für eine Sortierung mit dicts
auto1 = {
    "PS" : 150,
    "Preis" : 15000
}

auto2 = {
    "PS" : 190,
    "Preis" : 12000
}

auto3 = {
    "PS" : 90,
    "Preis" : 19000
}

auto4 = {
    "PS" : 190,
    "Preis" : 25000
}

auto5 = {
    "PS" : 180,
    "Preis" : 15000
}

autos = [ auto1, auto2, auto3, auto4, auto5 ]
# Idee: Wie sortiere ich das aufsteigend nach PS?
# x ist ein dictionary
# Vergleich des PS-Wertes der jeweiligen dictionaries
# Wir brauchen immer zwei Datentypen zum Vergleich, für die
# das < definiert ist
sortierte_liste = sorted(autos, key=lambda x: x["PS"])
print(sortierte_liste)

sortierte_liste = sorted(autos, key=lambda x: x["Preis"])
print(sortierte_liste)


# def multisort(x,y):
#     if(x["PS"] == y["PS"]):
#         if x["Preis"] < y["Preis"]:
#             return True
#         else:
#             return False
#     else:
#         x["PS"] < y["PS"]

# sortierte_liste = sorted(autos, key=multisort)
# print(sortierte_liste)

# liste.sort()


sortierte_liste = sorted(autos, key=lambda x: x["Preis"])
print(sortierte_liste)

# mehrkriterielles Sortieren mit Tupel !
# 
sortierte_liste = sorted(autos, key=lambda x: (x["PS"], x["Preis"]), reverse=True)
print(sortierte_liste)

sortierte_liste = sorted(autos, key=lambda x: (x["Preis"], x["PS"]))
print(sortierte_liste)

absteigend = input("Soll absteigend sortiert werden: ")
if absteigend == "yes":
    fac = -1
else:
    fac = 1

# vorrangig Preis aufsteigend, PS nachrangig absteigend: 
sortierte_liste = sorted(autos, key=lambda x: (x["Preis"], (fac)*x["PS"]))
print("vorrangig Preis aufsteigend, PS nachrangig absteigend: ", sortierte_liste)

kriterium1 = input("Erstes Kriterium: ")
kriterium2 = input("Zweites Kriterium: ")
sortierte_liste = sorted(autos, key=lambda x: (x[kriterium1], x[kriterium2]))
print(sortierte_liste)


# Taschenrechner mit nur einer Funktion
# func soll eine (Lambda-Funktion) sein, die an
# die operation übergeben wird
def operation(a,b,func):
    print(func(a,b))

a = float(input("Nummer 1: "))
b = float(input("Nummer 2: "))

operation(a,b, lambda a,b: a+b)
operation(a,b, lambda a,b: a*b)
operation(a,b, lambda a,b: a/b)
operation(a,b, lambda a,b: a%b)
operation(a,b, lambda a,b: a//b)


# def operation(func):
#     a = float(input("Nummer 1: "))
#     b = float(input("Nummer 2: "))
#     print(func(a,b))

# operation(lambda a,b: a+b)
# operation(lambda a,b: a*b)
# operation(lambda a,b: a/b)
# operation(lambda a,b: a%b)
# operation(lambda a,b: a//b)




def operation(func):    
    print(func(a,b))

a = float(input("Nummer 1: "))
b = float(input("Nummer 2: "))
zeichen = input("Rechnung: ")

if zeichen == '+': calc = lambda a,b: a+b
if zeichen == '-': calc = lambda a,b: a-b
if zeichen == '*': calc = lambda a,b: a*b
if zeichen == '/': calc = lambda a,b: a/b

operation(calc)


# Noch kürzer
a = float(input("Nummer 1: "))
b = float(input("Nummer 2: "))
zeichen = input("Rechnung: ")

if zeichen == '+': calc = lambda a,b: a+b
if zeichen == '-': calc = lambda a,b: a-b
if zeichen == '*': calc = lambda a,b: a*b
if zeichen == '/': calc = lambda a,b: a/b

print(calc(a,b))

# Eingabe: Keine
# Anweisung: print("Hallo")
# Rückgabe: None
test = lambda : print("Hallo")
print(type(test)) # <class function>
nichts = test() # nichts ist None

from collections import ChainMap
