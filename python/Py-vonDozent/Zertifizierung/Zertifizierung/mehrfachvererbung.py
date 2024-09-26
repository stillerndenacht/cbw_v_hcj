class A:
    def method(self):
        return "A"

class B(A):
    pass

class C(A):
    def method(self):
        return "C"

class D(B, C):
    pass

obj = D()
print(obj.method()) # C erbt auch von A, genau wie B, also wird erst in B und dann in C nachgesehen,
# ob es eine method(self) gibt.

class A:
    def method(self):
        return "A"

class B(A):
    pass

class C:
    def method(self):
        return "C"

class D(B, C):
    pass

obj = D()
print(obj.method()) # Hier ist es A, da der Vererbungsstrang B prioritär


class A:
    def method(self):
        return "A"

class B(A):
    def method(self):
        return "B"

class C(A):
    def method(self):
        return "C"

class D(B, C):
    def test(self):
        print("Aufruf an C:", C.method(self))
    

obj = D()
print(obj.method()) # C erbt auch von A, genau wie B, also wird erst in B und dann in C nachgesehen,
# ob es eine method(self) gibt.
obj.test()
