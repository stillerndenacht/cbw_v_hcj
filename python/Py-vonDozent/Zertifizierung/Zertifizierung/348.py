# QUESTION 348
# Assuming that the following inheritance set is in force, which of
#  the following classes are declared properly?
# (Choose two.)
class A:
    pass
class B(A):
    pass
class C(A):
    pass
class D(B):
    pass

# A: Formell muss die spezfiischere Klasse zuerst bei der Vererbung stehen.
# Sonst wäre es so, als wenn man priorität von seinen Großeltern erben wollen würde
# => systemisch sinnlos.
# Methoden und Eigenschaften A sind, sofern nicht überschrieben, sowieso direkt über 
# D verfügbar. Spezifisch kann man eine Methode aus A auch aufrufen 
# A. class Class_4(D, A):
# pass
# B. class Class_3(A, C):
# pass
# C. class Class_2(B, D):
# pass
# D. class Class_1(C, D):
# pass
# Mehrfachvererbung sinnvoll, Beispiel: Land (C), Wasser (D) 
# und Amphibienfahrzeuge (Class_1)
# Hier erbt man aus verschiedenen Vererbungslinien ! 


class A:
    def show(self):
        print("Hallo von A")
    def func1(self):
        print("func1 von A")

class B:
    def show(self):
        print("Hallo von B")
    def func2(self):
        print("func2 von B")

class C(A, B):
    # def run():
    #     B.show()
    pass

# Haben mehrere Elternklassen eine Methode mit demselben Namen
# und ist diese in der Kindklasse NICHT überschrieben,
# dann geht es nach der Reihenfolge, wie die Vererbung angegeben wurde.
C().show() # Welches show() wird genommen? A
# Werden func1() und func2() nicht überschrieben, kann man
# in der Kindklasse beide Methoden verwenden (disjunkt)
C().func1() 
C().func2()