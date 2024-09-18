# QUESTION 374
# What is the expected behavior of the following code?
class Super:
    def make(self):
        pass
    def doit(self):
        return self.make()
class Sub_A(Super):
    def make(self):
        return 1
class Sub_B(Super):
    pass

a = Sub_A()
b = Sub_B()

print(a.doit() + b.doit()) # 
    #    1     +    None

# A. it outputs 0
# B. it raises an exception
# C. it outputs 1
# D. it outputs 2

# Lösung: B