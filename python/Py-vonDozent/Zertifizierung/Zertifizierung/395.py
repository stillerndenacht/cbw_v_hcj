# QUESTION 395
# Assuming that the code below has been placed inside a file named code.py and 
# executed successfully, which of the following expressions evaluate to True? (Choose two.)

class ClassA:
    var = 1
    def __init__(self, prop):
        prop1 = prop2 = prop

class ClassB(ClassA):
    def __init__(self, prop):
        prop3 = prop ** 2
        super().__init__(prop)
    def __str__(self):
        return 'Object'

Object = ClassA(2)
print(Object) # String-Repräsentation durch __str__() aus object
# print(ClassA.__name__)
# A. ClassA.__module__ == '__main__' # True, wenn code.py der Start des Programms
# B. __name__ == '__main__' # True, __name__ ist nur für Klassen und Module
# Namen eines Objektes / Instanz kann dann mit __str__() gesetzt werden. Und es gibt id()
# C. str(Object) == 'Object' # False, da __str__() nur für Klasse B
# D. len(ClassB.__bases__) == 2 # False, da len = 1 (nur direkte Eltern)

string1 = "Hallo"
string2 = "Hallo"
# String-Pool in Python sorgt für die interne 
# Speicherverwaltung, sodass Strings mit demselben Inhalt
# an derselben Stelle abgelegt werden. 
print(id(string1) == id(string2))
print(string1 is string2)

# eval()