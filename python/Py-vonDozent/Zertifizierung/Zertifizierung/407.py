# QUESTION 407
# What is the expected behavior of the following code?

class Class:
    _Var = 1
    __Var = 2
    def __init__(self):
        self._prop = 3
        self.__prop = 4
        # self.__Var

o = Class()
print(o._Class__Var + o._Class__prop)
        # 2 + 4 = 6
# richtiger: 
# print(Class._Class__Var + o._Class__prop)


# A. it raises an exception
# B. it outputs 1
# C. it outputs 3
# D. it outputs 6

# Lösung: D