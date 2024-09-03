# Nur greet wird aus module1 importiert
# Name shadowing Probleme werden verhindert, wenn Alias vergeben wird bei from
from module1 import greet as gr, a

# Zugriff auf greet NUR mit greet() OHNE Modulnamen
gr()
print(a)

def greet():
    print("Hallo aus Modul 2")

greet()

# module1.greet()