# QUESTION 384
# Which of the following lines of code will work flawlessly when out independently inside 7
# the inc() method in order to make the snippet's output equal to 3? (Choose two.)
# def put(x):
#     print("Hallo")

class MyClass:
    Var = 0
    def __init__(self):
        MyClass.Var += 1
        self.prop = MyClass.Var
    def get(self):
        return self.prop
    def put(self, val):
        self.prop = val
    def inc(self, val):
        # insert the line of code here

Object = MyClass()
Object.inc(2)
print(Object.get())

# A. put(self.prop + val) # False, keine self-Bindung
# B. self.put(get() + val) # False, keine self-Bindung
# C. self.put(self.get() + val)
# D. self.put(self.prop + val)

# Lösung: CD