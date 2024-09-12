# QUESTION 317
# What is the expected behavior of the following code?
def f(n):
    for i in range(1, n + 1):
        yield i

for i in f(2): # f(2) ist immer gleich
    print(i, end=' ') 

# f(2) ist ein iterable. Daher wird mit in f(2) next() ausgeführt. 
# Ein Generator ist auch ein iterable ! 

# A. print 2 1 # fällt raus, weil in Zeile 4 zuerst die 1 generiert wird.
# B. print 1 2
# C. cause a runtime exception
# D. print <generator object f at (some hex digits)>
# Ist auszuschließen, da i nicht das Generatorobjekt ist, 
# sondern das Ergebnis von yield

# gen = f(10)
# for i in range(3):
#     print(next(gen))

# count = 0
# for i in f(10):
#     if count > 3:
#         break
    
#     print(next(gen))

# print(next(f(10))) 


# def f(n):
#     for i in range(1, n + 1):
#         yield i

# count = 0
# for i in f(10):
#     if count > 3:
#         break

#     print(i) # 0 1 2 3
#     count += 1

# # Führt zu Neuinitialisierung 
# print(next(f(10))) # 5? # exception? # 1



# gen = f(10)
# gen2 = gen

# count = 0
# for i in gen:
#     print(i)
#     if count > 3:
#         break
#     count += 1
#      # 0 1 2 3
    
# # print(i) # 5

# # Führt zu Neuinitialisierung 
# print(next(gen))
# print(next(gen2)) # 5? # exception? # 1
# print(next(gen))