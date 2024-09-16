# QUESTION 356
# Assuming that the code below has been executed successfully, which of the expressions evaluate to True?
# (Choose two.)
class Class:
    var = data = 1
    def __init__(self, value):
        self.prop = value
Object = Class(2)
# mit dict kann man sehen, was Bestandteil der Klasse / Struktur ist.
# A. 
print(Class.__dict__)
# Länge kann nie 1 sein
len(Class.__dict__) == 1
# B.
print('data' in Class.__dict__) 
# data ist eine KLASSENVARIABLE, daher finden wir diese im dict von Class.
'data' in Class.__dict__
# True
# C. 
# var ist eine KLASSENVARIABLE, daher finden wir diese im dict von Class.
'var' in Class.__dict__
# True
# D. 
'data' in Object.__dict__
# False, da data nicht Bestandteil des Objektes ist, sondern der Klasse. 
# data ist KEINE Instanzvariable und gehört somit nicht zu Object

# Lösung: BC
