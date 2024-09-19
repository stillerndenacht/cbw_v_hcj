# QUESTION 351
# What is the expected behavior of the following code?
class Class:
    __Var = 0 # Klassenvariable: privat, auf __Var können alle Instanzen zugreifen
    # Speicherbereich der KLASSE, nicht der Instanzen. Änderungen an diesen Variablen sind über alle
    # Instanzen hinweg sichtbar.  
    def foo(self):
        # self.__Var = 0
        # self._semi_priv = 123 # semi-privaate (protected), NUR KONVENTION 
        Class._Class__Var += 1
        # Class.__Var += 1 # Zugriff auch so möglich, da innerhalb von Class
        self.__prop = Class._Class__Var # Reihenfolge des Aufrufs wichtig 

o1 = Class()
o1.foo() #:__Var = 1, # o1.__prop = 1
o2 = Class()
o2.foo() #:__Var = 2, keine Auswirkung auf o1
# sowohl o1 und p2 schreiben in DIESELBE Variable (Klassenvariable)

# o1._semi_priv

print(o2._Class__Var + o1._Class__prop) # hier MUSS name mangling 
# print(o2._Class__Var + o2._Class__prop) # Ausgabe 4, da __prop von __Var abhängt.
print(Class._Class__Var) # Zugriff über Klassenvariablen
print(o2._Class__Var) # Zugriff auf Klassenvariable über Objekt NUR möglich,
# wenn es keine private Instanzvariable mit demselben Namen (__Var) gibt. 

# A. it outputs 1
# B. it outputs 3
# C. it outputs 6
# D. it raises an exception

# Lösung: B
