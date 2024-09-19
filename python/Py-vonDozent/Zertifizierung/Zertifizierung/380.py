# QUESTION 380
# Assuming that the code below has been executed successfully, which of the 
# expressions evaluate to True?
# (Choose two.)
class Class:
    var = 1 # Klassenvariable
    def __init__(self, value):
        self.prop = value

Object = Class(2)

# __dict__ liefert ein dictionary mit Klassen / Instanzvariablen
# A. True
'var' in Class.__dict__
print(Class.__dict__)
# B. False
'var' in Object.__dict__ # var ist eine Klassenvariable und KEINE Instanzvariable, sodass
# wir diese im dict von Object nicht finden können
# # C. True
len(Object.__dict__) == 1 # nur self.prop
print(Object.__dict__)
# D. False # Instanzvariable gehört in das dict von Object, nicht Class
'prop' in Class.__dict__


class A:
    def __init__(self):
        self.x = 1
        self.y = 2
    def test(self):
        pass

class B(A):
    def __init__(self):
        # super() muss immer aufgerufen werden, damit das Objekt vollständig ist.
        # Sonst taucht weder x, noch y im dict des Objekts auf.
        # Zugriff auf x ohne super()
        super().__init__()
        self.z = 3

b = B() 
b.test()
# b.x = 8
# print(b.x) # 1 ?
print(b.__dict__) # nur


