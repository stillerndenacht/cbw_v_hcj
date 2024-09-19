# QUESTION 355
# Assuming that the following piece of code has been executed successfully, which of the expressions
# evaluate to True? (Choose two.)
class A:
    VarA = 1
    def __init__(self):
        self.prop_a = 1

class B(A):
    VarA = 2
    def __init__(self):
        super().__init__()
        self.prop_b = 2
obj_a = A()
obj_aa = A()
obj_b = B()
obj_bb = obj_b

print(obj_a is obj_aa) # False
print(obj_b is obj_bb) # True, weil selbe Referenz !
# A. isinstance(obj_a, A) # True, da Zeile 14
# B. A.VarA == 1 # True
# C. obj_a is obj_aa # False
# D. B.VarA == 1 # False, man kann auch Klassenvariablen überschreiben