import math

import platform
import random


# a, b, c = (1, 2), (3, 4), (5, 6)
# print(a, b, c)
# a, b, c = a[0] + c[1], b[0] + b[1], c[0] + a[1]
# print(a, b, c)

# a = 1 / 10
# b = 0.1
# print(a, b)
# print(a == b)
# print(repr(a), repr(b))
# print(a * 100, b * 100)
# print(a + a + a + a + a == b + b + b + b + b)
# print(a.hex(), b.hex())

# a = "Marvin's weed's name's \"La Sage\""
# b = "Marvin's weed's name's \"La Sage\" "
# print(a)
# print(b)

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

# x = "Peter"
# y = "Peter"
# z = x is y
# print(z)

# # Funktionen mit gleichem Namen überschreiben sich
# class test:
#     def __init__(self):
#         pass
#     def a(self,b=0):
#         if b == 1:
#             print("aus a1")
        
#     def a(self,d=0):
#         if d == 2:
#             print("aus a2")
        
# a = test()
# a.a(1)
# #a.a(2)

#print(math.ceil(-1.1))
#print(math.factorial(3))
# print(math.hypot(2,2,2))
# print(math.hypot(2,2))
# print(math.hypot(2,2,2,2))

# teststr = "a b c d e f g h i j"
# test1 = teststr.split(" ",2)
# print(test1)

# teststr = "string"
# teststr2 = teststr[:]
# teststr3 = "str"

# print("1",teststr,"\n", teststr2)
# print("2",id(teststr),id(teststr2))

# print("3",teststr,"\n",teststr2)
# print("4",teststr == teststr2)

# print("5",str(teststr),"\n",str(teststr2))
# print("6",str(teststr) == str(teststr2))
# print("7",teststr is teststr2)

# teststr = "string"
# teststr2 = teststr[:]
# teststr3 = "str"
# print(f"""
#       id's der Buchstaben:
#         s,{id(teststr[0])}
#           {id(teststr2[0])}
#           {id(teststr3[0])}
#           {id("s")}

#         t,{id(teststr[1])}
#           {id(teststr2[1])}
#           {id(teststr3[1])}
#           {id("t")}

#         r,{id(teststr[2])}
#           {id(teststr2[2])}
#           {id(teststr3[2])}
#           {id("r")}
#             ...
#             ..
# """)

# print(teststr[2] == teststr2[2])
# print(teststr[2] == teststr3[2])
# # erst wenn man was ändert ändert sich auch die id
# teststr2 += "x"
# print("8",teststr is teststr2)
# print("9",id(teststr),id(teststr2))

# print(f"""
#       id's der Buchstaben:
        
#           0, {id("0")}        
#           1, {id("1")}        
#           2, {id("2")}
#             ...
#             ..
#           A, {id("A")}        
#           B, {id("B")}        
#           C, {id("C")}
# """)
# print(type(id("C")))
# print(repr(140735955729256))

# def func(x, y):
#     return x / y
 
# try:
#     func(3, 0)

# except ZeroDivisionError:
#     print("Error 2")
# except BaseException:
#     print("Error 3")
# except:
#     print("Error 1")
# def outer_func(num):
#     def inner_func():
#         print(num)
        
#     return inner_func

# funcs = []
# for i in range(3): # [0,1,2]
#        funcs.append(outer_func(i))

# for f in funcs:
#     f() # 

# 47
# class Spam(Exception):
#     pass
# class Ham(Spam):
#     pass
# for cls in [Spam, Ham]:
#     try:
#         #print(type(cls()))
#         raise cls()
#     except Spam:
#         print("Spam", end=" ")
#     except Ham:
#         print("Ham", end=" ")
# print(sorted("python"))
# #print(ord(""))
# fruits = ["apple", "banana", "cherry"]
# print(fruits[-2])


# my_list = [i for i in range(5)]
# m = [my_list[i] for i in range(4, 0, -1) if my_list[i] % 2 != 0]
# print(m)

print(random.choice({1:"spam", 2:"ham", 0:"eggs"}))
print(random.sample(["spam", "ham", "eggs"], k = 0))

def f(n):
    for i in range(1, n+1):
        print("i",i)
        yield i
for i in f(2):
    print(i, end=" ")

print("\n--------next-----------\n")

class Class:
    Variable = 0
    def __init__(self):
        self.value = 0

object_1 = Class()
# print(object_1.__dict__)
object_1.Variable = 1

object_2 = Class()
object_2.value +=1
#print(object_1.__dict__)
#print(object_2.__dict__)
#print(object_2.Variable)
print(object_2.Variable + object_1.value)

print("\n--------next-----------\n")

class MyClass:
    def __init__(self, value):
        self.value = value
    def add_value(self, x):
        self.value += x

a = MyClass(5)
b = a 
b.add_value(10)
# a.add_value(2)
# print(id(a.add_value))
# print(id(b.add_value))
print(a.value + b.value)

print("\n--------next-----------\n")
    
my_string = "Lernen für das Zertifikat ist öde"
print(my_string[1:32:11].count("a"))
print(my_string[1:32:11])

print("\n--------next-----------\n")

class MyClass:
    def __init__(self):
        self.__value = 100

obj = MyClass()
print(hasattr(obj, "_MyClass__value"))
print(obj._MyClass__value)
#print(obj._self__value)

print("\n--------next-----------\n")

def countdown(n):
    while n > 0:
        #print(n)
        yield n
        n-= 1

for x in countdown(3):
    print(x, end=" ")

print("\n--------next-----------\n")

class A:
    __VarA = 1
    def get(self):
        return self.__VarA
class B(A):
    __VarA = 2
    def get(self):
        return self.__VarA
class C(B):
    __VarA = 3 # weil diese VarA private ist kann man aus dem get von B nicht darauf zugreifen

obj_a = A()
obj_b = B()
obj_c = C()

print(isinstance(obj_b, C))
print(C._C__VarA == 2)
print(hasattr(B, "get"))
print(obj_c.get()==2)

print("\n--------next-----------\n")

class MyClass:    
    pass
obj = MyClass()
print(hasattr(obj, '__name__'))
print(hasattr(obj, '__module__'))
print(hasattr(obj, '__bases__'))
print(hasattr(MyClass, '__name__'))

print("\n--------next-----------\n")

def f(n):
    for i in range(1, n+1):
        yield i
f = f(3)
print(next(f))
print(next(f))


print("\n--------next-----------\n")

x = eval('22+5+int("3")')
print(x)