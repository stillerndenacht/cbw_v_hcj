# Nur greet wird aus module1 importiert
from module1 import greet, a

# Zugriff auf greet NUR mit greet() OHNE MODULNAMEN
greet()
print(a)

# Name shadowing Problem wie gehabt
def greet():
    print("Hallo aus Modul 2")

greet()

# module1.greet()