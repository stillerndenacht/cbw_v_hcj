import random


# matrix = [[1,2,3],[4,5,6],[7,8,9]]

# t = [[r[i] for r in matrix] for i in range(len(matrix[0]))]
# print(t)



# for i in range(100000):
#     v1 = random.random()
#     v2 = random.random()
#     if v1 == v2:
#         print(f"{i} : {v1} und {v2} sind gleich")
#         break
#     else:
#         print(f"{i} : {v1} und {v2}")

# class Failure(IndexError):
#     def __init__(self, message):
#         self.message = message
#     def __str__(self):
#         return "Problem"
    
# try:
#     print("Launch")
#     raise Failure("Ignition")

# except RuntimeError as error:
#     print(accident)

# except IndexError as error:
#     print("Ignore")
# else:
#     print("Landing")

# x = input("Enter a value: ")
# print(42.0/x)

# def inc(inc):
#     print("inc",inc)
#     def do(val):
#         print("val",val)
#         return val + inc
#     return do

# action = inc(-1)    # die Funktion inc(-1) mit Wert -1 wird einem Identifier zugewiesen
# print(action(2))    # unter dem Namen action wird sie aufgerufen und der noch fehlende val mitgegeben

# print(inc(-1)(2))   # das ist das gleiche wie oben

x = "12.8"
i = int(x)
y = str(i)
print(y == x)

#print(int(12.8))
