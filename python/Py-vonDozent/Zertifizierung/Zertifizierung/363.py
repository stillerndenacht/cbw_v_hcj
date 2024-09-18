# QUESTION 363
# Assuming that the following code has been executed successfully, which of the
#  expressions evaluate to True? (Choose two.)

def f(x, y):
    # nom, denom und g sind lokale Variablen von f
    nom, denom = x, y
    # Jede Funktion hat einen Stack (Speicherbereich mit lokalen Variablen)
    # g kann nach Beenden von f nicht gelöscht werden, da von außen referenziert durch a und b.
    # a und b sind unterschiedlich, da g von nom und denom als lokale Variablen 
    # in g unterschedlich sind. Also: 2 unterschiedliche Funktionen.  
    def g():
        # nom = 9 # NEUE lokale Variable in g und nicht mehr das von f
        # nonlocal nom # hier wird nom aus f beschrieben, da nonlocal
        # nom = 9
        return nom / denom
    # Was bedeutet das? 
    # g wird als Funktionsreferenz zurückgegeben
    # Hier wird nichts ausgeführt
    return g

# print(g) # kein Zugriff auf innere Funktionsreferenz
a = f(1, 2) # a ist g mit den Werten 1,2
print(type(a), a) # Funktion, Adresse
b = f(3, 4) # b ist g mit den Werten 3,4
print(b()) # 0.75

# A. b() == 4
# False, da nom / denom 3 / 4
# B. a != b 
# True
# g ist eine Funktionsreferenz, die von nom und denom abhängt.
# Beide Aufrufe von f erzeugen zwei unterschiedliche g
# C. a is not None
# True, da Funktionsreferenz zurückgegeben wird und die ist nicht None :-)
# D. a() == 4 # False, da Ausgabe 0.5

a = 9

def test():
    print(a)

test()