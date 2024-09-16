a, b, c = (1, 2), (3, 4), (5, 6)
print(a, b, c)
a, b, c = a[0] + c[1], b[0] + b[1], c[0] + a[1]
print(a, b, c)

a = 1 / 10
b = 0.1
print(a, b)
print(a == b)
print(repr(a), repr(b))
print(a * 100, b * 100)
print(a + a + a + a + a == b + b + b + b + b)
print(a.hex(), b.hex())

a = "Marvin's weed's name's \"La Sage\""
b = "Marvin's weed's name's \"La Sage\" "
print(a)
print(b)

# QUESTION 320
# If any of a class's components has a name that starts with
# two underscores (___), then:

# A. the class component's name will be mangled
# B. the class component has to be an instance variable
# C. the class component has to be a class variable
# D. the class component has to be a method

# data = {1:0, 2:1, 3:2, 0:1}
# # x = 0
# # for _ in range(len (data)):
# #     print(_ ,"x in : ", x, data)
# #     x = data[x]
# #     print(_,"x out : ", x, data)


# # print(x)
# print(data[0], data[1],data[2], data[3])

# class Class:
#     __Var = 0  
#     def foo(self):
#         Class._Class__Var += 1
#         self.__prop = Class.__Var

# o1 = Class()
# o1.foo() 
# o2 = Class()
# o2.foo()


# print(o2._Class__Var + o1._Class__prop)

# a =[0]
# b = a[:]
# a[0]=1

# a[0]-1 == b[0]

x = "Peter"
y = "Peter"
z = x is y
print(z)

class test:
    def __init__(self):
        pass
    def a(self,b=0):
        if b == 1:
            print("aus a1")
        
    def a(self,d=0):
        if d == 2:
            print("aus a2")
        
a = test()
a.a(1)
#a.a(2)