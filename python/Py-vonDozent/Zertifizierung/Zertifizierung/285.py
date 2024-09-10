# QUESTION 285
# Is it possible to safely check if a class/object has a certain attribute?

# A. yes, by using the hasattr attribute
# B. yes, by using the hasattr( ) method
# C. yes, by using the hasattr( ) function
# D. no, it is not possible

# Lösung: C, da hasattr() KEINE Objektbindung hat (daher Funktion)
# bmw.hasattr() wäre B 

# In Python kann man zur Laufzeit abfragen, welche Attribute 
# (u.a. Instanzvariable) in einer Klasse / Objekt vorhanden sind.

class Auto:
    def __init__(self, bez, ps):
        self.bez = bez
        self.ps = ps

    def start(self):
        pass

bmw = Auto("BMW 118d", 150)

# Zur Laufzeit abfragen, welche Attribute hier in dem Objekt vorhanden sind.
# Hat das Objekt bmw das Attribut bez?
# hasattr arbeitet objektbezogen und klassenbezogen.
print(hasattr(bmw, "bez")) # True
print(hasattr(bmw, "preis")) # False 

# Man kann dynamisch Attribute zur Laufzeit auf Objektebene hinzufügen !
# Wir definieren hier eine Eigenschaft NUR für bmw
# AUSSERHALB der Klassenlogik ! 
bmw.preis = 50_000
print(hasattr(bmw, "preis")) # True 
# Dieser Mechanismus funktioniert auch mit Methoden, da diese quasi
# auch Variablen sind 
print(hasattr(bmw, "start")) # True

# Komplette Eigenschaften von bmw zur Laufzeit abrufen
# Funktion dir
print(dir(bmw)) 