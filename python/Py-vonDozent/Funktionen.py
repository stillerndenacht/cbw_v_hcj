# Code-Block, der eine Sequenz von Anweisungen wiederverwendbar macht.
# Unterschied zwischen einer Methode und einer Funktion
# Funktionen stehen für sich allein und werden nicht mit 
# object.methode() aufgerufen
# Beispie ist 

print("Los gehts")

# Methoden werden im Kontext von Objekten aufgerufen.

"Nils".isalpha() # isalpha ist eine Methode der Klasse str




# Vorteil: Wiederverwendbarkeit, Erweiterbarkeit, Wartbarkeit, ...

# greet()
# Funktion werden in Python wiefolgt deklariert:
# Funktion OHNE Eingabeparameter, d.h. beim Aufruf an diese Funktion
# geben wir KEIN Argument
def greet():
    print("Hallo, wie gehts?") 

greet() # Der Aufruf einer Funktion kann niemals vor derem Definition erfolgen.


# Wie kann diese Funktion auch einen Namen ausgeben, den wir außerhalb
# der Funktion festlegen?
# Eingabeparameter name
# Wir können Funktionen redefinieren. 
# In JavaScript gilt immer die letzte Funktion, die ich unter dem Namen definiert habe.
# In Python gilt eine Funktion solange, bis sie durch eine andere Funktion mit 
# demselben Namen überschrieben wurde.
# In Python muss genau die Anzahl der geforderten Argumente auch übergeben werde.
# JavaScript ist agnostisch, ggf. undefined oder Abschneiden 
def greet(name):
    print(f"Hallo, wie gehts? {name}")

# name shadowing
# greet = 7 # greet als Funktion unbrauchbar
    #print("Hallo, wie gehts?", name) 

greet("Torben") # Der Aufruf einer Funktion kann niemals vor derem Definition erfolgen.
# greet() # Fehler
# Der folgende Aufruf funktioniert NICHT, weil eine Funktion greet

# nur EINMAL existieren darf. Wird sie nochmal definiert, ÜBERSCHREIBT sie 

# die bisher existierende Funktion.

# Andere Programmiersprachen erlauben jedoch das Überladen von Funktion, Python

# AUSDRÜCKLICH nicht!!!

# greet() # Fehler wg. Argumentliste 


# Funktion mit mehreren Argumenten
# Man kann in Python den Datentypen empfehlen, das System 
# lässt aber alle Datentypen zu und konvertiert auch nichts 
# In Python muss ich explizit konvertieren
# Es gibt also keine strikte Typisierung 
# : Datentyp ist eine Dokumentation !
def greet(tageszeit : int, name : str):
    print(type(name))
    print(f"{tageszeit}, wie gehts? {name}") # String-Repräsentation

    #print("Hallo, wie gehts?", name) 

greet("Guten Abend", "Torben") # Der Aufruf einer Funktion kann niemals vor derem Definition erfolgen.
greet(1,2) # Funktioniert auch




# Funktion mit mehreren Argumenten

def greet(tageszeit, name):

    print(f"{tageszeit}, wie gehts? {name}")

    # print("Hallo, wie gehts?", name) 




greet("Guten Abend", "Torben") # D




# name= ist ein benannter Parameter, mit Default-Wert

def greet(tageszeit, name="Kurs"):
    print(type(name))
    print(f"{tageszeit}, wie gehts? {name}")

    # print("Hallo, wie gehts?", name) 

# positionale Argumente (ohne =)
greet("Guten Abend", "Torben") 
greet("Guten Abend", 2) # Redefinition von name

# wenn kein zweites Argument gegeben wird,
# wird der Default-Parameter genommen. 
greet("Guten Abend")

# keyword-Argumente 
# dann kann reinfolge geändert werden
greet(name="Nils", tageszeit="Guten Abend") 

print(sep='\t')

# positionale Argumente müssen immer am Anfang der Parameterliste stehen.
#geht nicht:
#greet("otto", tageszeit="gute nacht")




# Keine Default-Parameterm ABER benannte Argumente zum Aufruf

def greet(tageszeit, name):

    print(f"{tageszeit}, wie gehts? {name}")

    # print("Hallo, wie gehts?", name) 




# kein Zugriff auf Variablen, die in der Funktion sind, von außen möglich

# print(tageszeit)




greet(name="Torben", tageszeit="Guten Abend")

print("Matthias", end="\t", sep=",")




# In Python können Funktionen einen Wert zurückliefern, müssen aber nicht.




def transform(a, fac):
    # a * fac # Ausgabe in 159 würde None bzw. nichts sein
    return a*fac




print("R1", transform(2,5))



# In Python können unterschiedliche Datentypen zurückgegeben werden je nach Fall
# ich muss nicht alle Bedingungen definieren und damit einen Rückgabewert
# garantieren.
def transform(a, fac):
    if a < 100:
        return a*fac
    elif a < 104:
        return str(a*fac) # String wird zurückgegeben

print("R2a",transform(2,5)) # int
print("R2b",transform(103,5)) # String
print("R2b",transform(105,5)) # None




# Es können beliebig viele Werte returniert werden
def transform(a, fac):
    return a*fac, "Rückgabe" # Tupel




x,y = transform(2,5) # x 10, y "Rückgabe"
# Rückgabe als Tupel

print("R3",transform(2,5)) 




# transform wird immer mit derselben Signatur überschrieben bzw. redefiniert. 

# In anderen Sprachen gäbe es hier einen Fehler, da ein Bezeichner schon existiert

# mit dem Namen. In Python kann ich die Semanti einer Funktion jedoch beliebig ändern

# UND DIES AUCH IM PROGRAMMABLAUF berücksichtigen. 




# In Python kann eine beliebige Anzahl von Argumenten als 

# Parameter übergeben werden




# args ist eine Liste von positionalen Argumenten.




# args ist ein Tupel und daher können die einzelnen

# Elemente nicht zugewiesen werden. 

def sum(a, *args):
    # args[0] = 1 
    print(type(args))
    summe = a
    for elem in args:
        summe += elem

    return summe

    # print(a, args)
    # print(args[0])

print(sum(5, 7,6,4,3,2,9.8))




# Beliebig viele benannte Parameter in einem
# dictionaries
# ** beliebieg viele Argumente als Key Value Paare an eine Funktion übergeben
def kosten(**cost):
    # diction = cost["diction"]
    gesamtkosten = 0
    # cost.keys() # Hier bekomme ich alle Schlüssel in dem dictionary
    # cost.values() # Hier bekomme ich alle Werte in dem dictionary
    for k,v in cost.items(): # sehr verwandt mit enumerate()
        print(k,v)
        gesamtkosten += v

    return gesamtkosten

# diction = {
#     "miete" : 500,
#     "nk" : 80,
#     "parken" : 60,
#     "automobil" : 350
# }

kosten(miete=500, nk=80, parken=60, automobil=350) # packing
# # Die Werte, die übergeben werden, werden als dictionary eingepackt
# kosten(diction)
# Funktioniert so nicht, weil es schon ein dict ist und nicht als dict
# eingepackt werden kann
# Funktionskopf:
# def kosten(cost):

# kosten(diction={"miete" : 500}) 
# Der Aufruf funktioniert, obere Funktion muss aber angepasst werden.





def kosten(**cost):

    gesamtkosten = 0

    for k,v in cost.items():

        print(k,v)

        gesamtkosten += v

    print(f"Gesamtkosten: {gesamtkosten}")




kosten(miete=500, nk=80, parken=60)



# andere ist eine Liste (Tupel) von beliebig vielen positionalen Argumenten
# cost ist ein Dict von beliebig vielen keyword Argumenten 
def kosten(*andere, **cost):
     print(andere)
     gesamtkosten = 0

     for k,v in cost.items():
        print(k,v)
        gesamtkosten += v

     print(f"Gesamtkosten: {gesamtkosten}")


# Wie würde ein Funktionsaufruf an diese Funktion aussehen?
# Argumente OHNE Zuweisung sind POSITIONAL
# Aus Argumenten mit Zuweisung wird ein dictionary gepackt.
# Die Reihenfolge erst positional, dann keyword
# darf nicht aufgebrochen werden
kosten(500, 100, 200, 300, miete=500,  nk=80, parken=60)

def kosten(a, *cost1, **cost):
    gesamtkosten = 0
    # Iteration über Keyword-Argumente
    for k,v in cost.items():
        print(k,v)
        gesamtkosten += v

    print(f"Gesamtkosten: {gesamtkosten}")

    # Iteration über positionale Argumente
    for price in cost1:
        print(price)
        gesamtkosten += price

    print(f"Gesamtkosten: {gesamtkosten}")

# Unterschiede im Verwenden von Funktionen bei immutable und mutable
# Datentypen:

def addiere_eins_in_liste(eine_liste):
    for i in eine_liste:
        i += 1

liste = [ 7,8,9 ]
addiere_eins_in_liste(liste)
print(liste)


kosten(500, 100, 200, 300, miete=500, nk=80, parken=60)




# Kombination eines einzelnen positionalen Arguments

# mit einem Tupel von Argumenten mit einem dictionary 

# möglich

def kosten(a, *cost1, **cost):

    gesamtkosten = 0

    for k,v in cost.items():

        print(k,v)

        gesamtkosten += v

    print(f"Gesamtkosten: {gesamtkosten}")

    for price in cost1:

        print(price)

        gesamtkosten += price

    print(f"Gesamtkosten: {gesamtkosten}")





# a= 500 tupel = (100,200,300) dict= {miete=500, nk=80, parken=60}
kosten(500, 100, 200, 300, miete=500, nk=80, parken=60)




def addiere_eins_in_liste(eine_liste):
    for k,v in enumerate(eine_liste):
        eine_liste[k] += 1
    # KEIN RETURN HIER NÖTIG

def addiere(x):
    x += 5
    return x 

# call-by-reference (mutable)
liste = [ 7,8,9 ]
addiere_eins_in_liste(liste)
print(liste) # Änderung OHNE, dass die Funktion ein return ausführt.


# call-by-value (immutable)
x = 7
addiere(x)
print(x) # Änderung nicht möglich, da IMMUTABLE bei Übergabe KOPIERT wird.
x = addiere(x)
print(x)