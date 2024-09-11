# QUESTION 293
# The following class hierarchy is given. What is the expected out of the code?
class A:
    def a(self):
        print("A", end=' ')
    def b(self): 
        print(type(self))
        self.a() # Aufruf an Methode a in B bzw. C, weil self immernoch
        # vom Typ B bzw. C ist. Nur, weil wir eine Methode einer Elternklasse
        # verwenden, ändert sich der Datentyp von self nicht.

class B(A):
    def a(self):
        print("B", end=' ')
    def do(self):
        self.b() # Es existiert keine Methode b() in Klasse B, sodass wir die
        # Methode b() aus Klasse A benutzen müssen

class C(A):
    def a(self):
        print("C", end=' ')
    def do(self):
        self.b()

B().do() # Wir rufen do in B auf. Das anonyme Objekt B() wird zu self,
# da do() mit dem Objekt verknüpft ist.  
# Dies ist kein name shadowing, sondern eine Referenz auf das Objekt B().
# Die wird weiter verwendet. 
C().do()

# A. B B
# B. C C
# C. A A
# D. B C