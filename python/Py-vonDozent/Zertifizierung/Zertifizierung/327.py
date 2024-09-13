# QUESTION 327
# What is the expected output of the following snippet?
class X:
    pass
class Y(X):
    pass
class Z(X):
    pass
x = Z() # x und z sind zwei Instanzen (Synonym: Objekte)
z = Z()
# Introspection builtin
# ist x eine Instanz von Z?
# "Ist-ein" - Beziehung 
# Eine Instanz ist eine Ausprägung einer Klasse
# z.B. eine Klasse Auto, viele unterschiedliche Autos (jeweils 1 Instanz)
# Nehmen wir an, X ist Fahrzeug. Dann ist z auch eine Instanz von X, weil
# ein Auto von Fahrzeug erbt. 
print(isinstance(x, Z), isinstance(z, X))

# A. True False
# B. True True
# C. False False
# D. False True