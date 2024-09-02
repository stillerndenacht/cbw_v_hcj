def generator_divisible(n):
    for i in range(200):
        if i > 0 and i % n == 0:
            yield i

divisible = generator_divisible(5)
print(next(divisible))
print(next(divisible))
print(next(divisible))

def generator_divisible2(n, r):
    #print("range",r)
    #while True:
    for i in range(r):
        #print(i)
        if i > 0 and i % n == 0:
            print("range",r, "i",i)
            yield i
            
x = generator_divisible2(5, 2000)
for j in range(20):
    
    print(j, next(x))
# x = generator_divisible2(15, 2000)
# print(next(x))
# print(next(x))
# print(next(x))