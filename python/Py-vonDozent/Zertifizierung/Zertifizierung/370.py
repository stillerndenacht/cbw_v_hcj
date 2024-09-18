# QUESTION 370
# What is the expected behavior of the following code?

class Class:
    Var = 0
    def __foo(self):
        Class.Var += 1
        return Class.Var

o = Class()
# Zugriff auf private Methode in Zeile 12 korrekt
# o._Class__foo() # name mangling
o.__Class_foo() # AttributeError 
print(o.__Class_foo())

# A. it raises an exception
# B. it outputs 3
# C. it outputs 1
# D. it outputs 6

# Lösung: A