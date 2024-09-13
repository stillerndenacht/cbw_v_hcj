# QUESTION 322
# A function called issubclass(c1, c2) is able to check if:

# A. c1 and c2 are both subclasses of the same superclass
# B. c2 is a subclass of c1
# C. c1 is a subclass of c2
# D. c1 and c2 are not subclasses of the same superclass

# builtin-Funktion:
# Man kann rausfinden, ob einer Klasse ein Kind einer anderen Klasse ist.

class G:
    pass

class A(G):
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

class D:
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

print(issubclass(C, B)) # True
print(issubclass(C, D)) # False
print(issubclass(C, G)) # True
print(issubclass(G, C)) # False
