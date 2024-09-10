# Question 289:

# A variable stored separately in every object is called:

# A. there are no such variables, all variables are shared among objects
# B. a class variable
# C. an object variable
# D. an instance variable
# Lösung: D

class Auto:
    # Klassenvariable
    counter = 0 # gemeinsamer Speicher für alle Objekte des Typs Auto
    def __init__(self, name):
        self.name = name # individuell für jedes Auto
    # ERSTER Parameter immer Objektkontext !
    # Kann beliebig heissen
    def gibt_laut(senf):
        print(senf.name)

auto1 = Auto("BMW")
auto2 = Auto("Porsche")
auto1.gibt_laut()
auto2.gibt_laut()

# ist eine Instanzvariable vom Typ Auto
print(isinstance(auto1, Auto)) # Ist auto1 vom Typ Auto?
# object ist Mutter aller Klassen
print(isinstance(auto1, object)) # Ist auto1 vom Typ object?
# Ja, denn ein Auto IST AUCH ein object