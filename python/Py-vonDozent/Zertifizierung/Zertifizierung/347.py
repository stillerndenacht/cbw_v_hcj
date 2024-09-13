# QUESTION 347
# What is the expected behavior of the following code?
class Super:
    def make(self):
        return 0
    def doit(self):
        return self.make()

class Sub_A(Super):
    # Überschriebene Methode von Super
    def make(self):
        return 1

class Sub_B(Super):
    pass

a = Sub_A()
b = Sub_B()

print(a.doit() + b.doit())
        # 1          0
# A. it outputs 0
# B. it outputs 1
# C. it raises an exception
# D. it outputs 2

# Lösung: B