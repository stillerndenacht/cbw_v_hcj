# QUESTION 411
# What is true about Python class constructors? (Select two answers)

# A. the constructor's first parameter identifies an object currently being created
# True (self)
# B. the constructor cannot use the default values of the parameters
# False 
# C. the constructor can be invoked directly under strictly defined circumstances
# False 
# D. super-class constructor is invoked implicitly during constructor execution
# False 

# Lösung: AD
# Diskussionsbedarf, da keine Eindeutigkeit besteht. C und D sind beide teilweise richtig. 
# __new__() ist in D gemeint.

class A:
    def __init__(self):
        self.x = 10
    def meth(self):
        print("Hi aus A")

class B(A):
    def __init__(self):
        pass

# print(B().x) # AttributeError: 'B' object has no attribute 'x'
B().meth() # Nicht wegen Konstruktor, sondern wegen de class-Definition

# __new__(self): Erzeugt einen neuen Speicherbereich (Hülle) für das Objekt 
# Hier der "Konstruktor"
# __init__(self): Befüllt das Objekt mit konkreten Instanzvariablen 
# "Initialisator"