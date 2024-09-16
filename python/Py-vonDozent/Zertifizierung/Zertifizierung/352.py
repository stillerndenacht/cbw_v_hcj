# QUESTION 352
# What is the expected behavior of the following code?
class Class:
    Variable = 0
    def __init__(self):
        self.value = 0

object_1 = Class()
# schreibender Zugriff !
# Nur für object_1 wird eine Instanzvariable mit dem Namen Variable
# angelegt. Im Speicher existieren jetzt hier 1 Klassenvariable mit de, Namen Variable
# und eine Instanzvariable NUR FÜR object1 mit dem Namen Variable. 
object_1.Variable = 1 # { Class.Variable, object_1.Variable, object_1.value  }
# Class.var
object_2 = Class()
object_2.value += 1 # object2.value = 1, object1.value = 0 # { Class.Variable, object_2.value  }
# Weil es keine Instanzvariable Variable für object2 gibt beim LESENDEN Zugriff
# wird hier die Klassenvariable genommen.

print("Objekt 1: ", object_1.__dict__)
print("Objekt 2: ", object_2.__dict__)
print("Class: ", Class.__dict__)

# Zugriff object_2 auf Class.Variable, da kein object_2.Variable existiert. 
print(object_2.Variable + object_1.value) # 0
#          0                     0

# A. it outputs 0
# B. it raises an exception
# C. it outputs 1
# D. it outputs 2

