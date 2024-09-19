# QUESTION 386
# What is true about Python class constructors? (Choose two.)

# A. there can be only one constructor in a Python class
# True, es kann nur einen geben ;-)
# B. the constructor cannot be invoked directly under any circumstances
# False, klar kann der Konstruktor bei Erzeugung des Objektes aufgerufen werden.
# False, z.B. Elternklasse kann einen Konstruktor einer Kindklasse nicht aufrufen.
# Oder: Rekursionsprobleme, wenn man ihn aus eigener Klasse aufruft.
# C. the constructor cannot return a result other than None
# True, Konstruktor initialisiert eine leere Hülle, gibt aber nichts zurück.
# D. the constructor's first parameter must always be named self
# Nein, man kann ihn auch hirsebrei nennen. 

# Lösung: AC

# class Test:
#     def __init__(self):
#         self.__init__()

# t = Test()