# QUESTION 350
# Assuming that the code below has been placed inside a file named code.py and executed successfully,
# which of the following expressions evaluate to True?
# (Choose two.)

class ClassA:
    var = 1
    def __init__(self, prop):
        prop1 = prop2 = prop # 3 LOKALE Variablen in __init__, die nach der Ausführung von __init__ weg sind.
    def __str__(self):
        return 'Object'

class ClassB(ClassA):
    def __init__(self, prop):
        prop3 = prop ** 2
        super().__init__(prop)

Object = ClassB(2)
# Object.prop # NameError, da prop nicht existiert (lokale Variablen) 

# A. 
len(ClassA.__bases__) == 2
# __bases__ enthält eine Liste von DIREKTEN Elternklassen
# B. 
# In welchem Module befindet sich diese Klasse?
print(ClassA.__module__ == '__main__') # True
# Das Modul ist main, da die Datei (code.py) bzw. 350.py das Startmodul ist 
# Unterschied zu __name__: Das ist der Modulname, man kann aber auch Strukturen in dem
# Modul nach dem jeweiligen Modul abfragen, siehe oben 8Ist die Klasse A Bestandteil von Modul __main__?

# Modulnamen als Zahlen sind problematisch
# Verstoß gegen Regeln für Variablennamen, wie hier:
# 349 = 'Hallo'
from threefournine import Upper
print(Upper.__module__ == '__main__') # False
print(Upper.__module__)

# C. 
__name__ == 'code.py'
# bei Start von code ist der Modulname __main__
# wenn code import werden wprde, ist der Name code

# D. 
# Es gibt keine magic Method __str__() für B.
# Aber es gibt eine für A !
# Bei der String-Konvertierung wird also die von A genommen.
# Hätte A keine __str__(), würde diese von der Klasse object genommen (Elter ALLER Klassen).
str(Object) == 'Object' # True

