# Code-Block, der eine Sequenz von Anweisungen wiederverwendbar macht.

# Unterschied zwischen einer Methode und einer Funktion

# Funktionen stehen für sich allein und werden nicht mit 

# object.methode() aufgerufen

# Beispie ist 

print("Los gehts")

# Methoden werden im Kontext von Objekten aufgerufen.

wert= "Nils".isalpha() # isalpha ist eine Methode der Klasse str
print(wert)



# Der Aufruf einer Funktion kann niemals vor derem Definition erfolgen.

# nur EINMAL existieren darf. Wird sie nochmal definiert, ÜBERSCHREIBT sie 

# die bisher existierende Funktion.

# Andere Programmiersprachen erlauben jedoch das Überladen von Funktion, Python

# AUSDRÜCKLICH nicht!!!

# greet() # Fehler wg. Argumentliste 
def greet():
    print("Hallo wie gehts?")

greet()


def greet(name):
    print(f"Hallo, wie gehts? {name}")
    x=name

greet("Veit")



#parameter 
def addieren(a,b,c):
    x=(a+b)
    print(x)

y=5
#Argumente
addieren(y,2,2)

def greet(tageszeit, name="Kurs"):

    print(f"{tageszeit}, wie gehts? {name}")

greet("Guten Abend", "Torben")

greet("Guten abend","Mohsen")


greet(name="Nils", tageszeit="Guten Abend")
greet("Nils","Guten Tag")
greet("guten Abend",name="Veit")
greet(tageszeit="guten abend")

# positionale Argumente müssen immer am Anfang der Parameterliste stehen.
#geht nicht:
#greet("otto", tageszeit="gute nacht")
# TypeError: greet() got multiple values for argument 'tageszeit'



def greet(tageszeit, name):

    print(f"{tageszeit}, wie gehts? {name}")

    print("Hallo, wie gehts?", name) 


x=3

print(greet("Abend","Mohsen"))

# kein Zugriff auf Variablen, die in der Funktion sind, von außen möglich


def greet(tageszeit, name):

    return f"{tageszeit}, wie gehts? {name}"

print(greet("Guten Abend","Veit"))

def transform(x,y):
    return x*y


print(transform(2,2))

def addieren(a,b):
    return a+b


#wir können funktionen in funktonen übergeben 
# (2*3)+3
addieren(transform(2,3),3)
transform(2,3)


x=transform(3,2)
y=addieren(x,2)
print(y)

print(addieren(transform(2,3),3))


def transform(a, fac):

    if a < 100:

        return a*fac
    
print("R2a",transform(2,5))

print("R2b",transform(105,5))


# Es können beliebig viele Werte returniert werden

def transform(a, fac):

    return a*fac, a+fac,a-fac,"Test" # Tupel


x,y,z,a= transform(1,23)
print(x)
print(y)

def beispiel(a,b):
    # belibige operationen
    return a*b,a+b,a-b

beispiel(2,2)
x,y,z=beispiel(2,2)
print(x,y,z)
print(beispiel(2,2))

def beispiel(a,b):
    
    return a*b,a+b,a-b

def vielealsliste(a,b):  
        x=  [a * b, a + b, a/b] 
        return x
print(vielealsliste(2,4))

def beispiel(a):
    return a*2

beispiel(2)
#beispiel(2,3)
#wird immer mit derselben Signatur überschrieben bzw. redefiniert. 

# In anderen Sprachen gäbe es hier einen Fehler, da ein Bezeichner schon existiert

# mit dem Namen. In Python kann ich die Semanti einer Funktion jedoch beliebig ändern

# UND DIES AUCH IM PROGRAMMABLAUF berücksichtigen. 
 

def sum(a:int,*args):
    summe=a
    for elem in args:
        summe += elem
    return summe

print(sum(4,7,6,4,3,2,9.8))

# Beliebig viele benannte Parameter in eines

# dictionaries

def kosten(**cost):
    gesamtKosten=0
    for k,v in cost.items():
        print(k,v)
        gesamtKosten+= v
    
    return f"Gesamtkosten: {gesamtKosten}"

print(kosten(miete=500,nebenKosten=100,parken=60,Gez=20))

def strecke(**strecken):
    gesamtstrecke=0
    for k,v in strecken.items():
        gesamtstrecke += v
        print(k,v)

    print(gesamtstrecke)


strecke(hinwegArbeit=50,rückwegArbeit=50,sport=20)

def kosten(a,*andere, **cost):
    print(andere)
    gesamtkosten =0
    for k,v in cost.items():
        print(k,v)
        gesamtkosten += v

    print(f"Gesamtkosten: {gesamtkosten}")

kosten(500, 100, 200, 300, miete=500,  nk=80, parken=60)

#def test (**a,**b):
# es ist nur ein tupel und dict erlaubt 
def test (a, b, *c, **d):
    e= list(c)
    print(a,b,c,d)

test(1,[1,2,3,4],1,2,3,4,miete=500,nk=80, parken=60)


def kosten(*cost1, **cost):

    gesamtkosten = 0

    for k,v in cost.items():

        print(k,v)

        gesamtkosten += v

    print(f"Gesamtkosten: {gesamtkosten}")

    for price in cost1:

        print(price)

        gesamtkosten += price

    print(f"Gesamtkosten: {gesamtkosten}")


kosten(500, 100, 200, 300, miete=500, nk=80, parken=60)