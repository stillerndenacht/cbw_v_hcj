# lambda : <Eingabe> : <Anweisung>, Anweisung ist auch Rückgabe
# aber sie hat keinen Namen...
# Identifier = lambda : <Eingabe> : <Anweisung> # jetzt mit Name/Identifier
addiere = lambda a,b : a+b
print(type(addiere)) # <class function>
print(addiere(4,5)) # Aufruf wie normale Funktion
addiere2 = addiere
print(addiere2(7,8))

# beide Funktionen gehen auf die gleiche Adresse
print("id(addiere) : ",id(addiere), "id(addiere) : ", id(addiere2))

liste = [2, 3, 5, 7,10, 11,13]
neue_liste = []
for i in liste:
    if i > 10:
        neue_liste.append(i)
print("neue_liste : ",neue_liste)        

# das gleiche mit lambda in filter-built-in 
# filter(alle x : wenn x > 10, auf liste) und das in filtered legen
filtered = filter(lambda x: x > 10, liste)
print("list(filtered) : ",list(filtered))

filtered2 = map(lambda x: x < 10, liste)
print(list(filtered2))

sortierte_liste = sorted(liste)
print(sortierte_liste)

auto1 = {"PS" : 90,
         "Preis" : 19000}
auto2 = {"PS" : 190,
         "Preis" : 109000}
auto3 = {"PS" : 200,
         "Preis" : 39000}
auto4 = {"PS" : 90,
         "Preis" : 19000}
auto5 = {"PS" : 190,
         "Preis" : 119000}
auto6 = {"PS" : 210,
         "Preis" : 39000}

autos = [auto1, auto2, auto3,auto4, auto5, auto6]
sortierte_autos = sorted(autos, key=lambda x : x["PS"], reverse=True)
print("nach PS : ",sortierte_autos)
sortierte_autopreise = sorted(autos, key=lambda x : x["Preis"], reverse=True)
print("nach Preis : ",sortierte_autopreise)
multisortierte_autos = sorted(autos, key=lambda x : (x["PS"], x["Preis"]))
print("nach PS und Preis : ",multisortierte_autos)

# def operation(a, b, func):
#     print(func(a,b))
# operation(5,3, lambda a,b: a+b)