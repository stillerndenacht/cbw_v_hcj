# QUESTION 412
# What is the expected behavior of the following code?

class Class:
    Variable = 0
    def __init__(self):
        self.value = 0

object_1 = Class()
object_1.Variable += 1  # object_1.Variable = object_1.Variable+ 1 
# object_1.Variable (neue Instanzvariable für object_1) = object_1.Variable (Klassenvariable!!) + 1
# Klassenvariable deshalb, da zu dem Zeitpunkt object_1.Variable als Instanzvariable noch nicht existiert
# hat, daher Auflösung in Klassenvariable. 
object_2 = Class()
object_2.value += 1 
print(object_2.Variable + object_1.value)
#           0           +       0

# A. it outputs 1
# B. it outputs 0
# C. it raises an exception
# D. it outputs 2

# Lösung: B