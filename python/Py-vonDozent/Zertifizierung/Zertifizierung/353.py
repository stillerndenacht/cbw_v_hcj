# QUESTION 353
# What is true about Object-Oriented Programming in Python? (Choose two.)

# A. each object of the same class can have a different set of methods
# False, Standardisierung von Methoden durch Klassen !
# B. a subclass is usually more specialized than its superclass
# True (Wasserfahrzeug ist spezieller als Fahrzeug)
# C. if a real-life object can be described with a set of adjectives, they may reflect a Python object method
# False, das sind Instanzvariablen, keine Methoden
# D. the same class can be used many times to build a number of objects
# True, man kann beliebig viele individuelle Fahrzeuge erzeugen. 

# Theoretisch kann man A aushebeln :-)
# aber nur ohne self-Logik
def func():
    print("Hallo aus Test")

class Test:
    def over(self):
        print("Over")
    

t = Test()
# func existiert nur für t
t.foo = func
t.over = lambda x: x**x
print(t.over(10)) 

t.foo()