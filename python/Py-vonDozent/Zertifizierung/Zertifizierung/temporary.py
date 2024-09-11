def f(n):
    for i in range(1, n + 1):
        yield i

count = 0
for i in f(10):
    if count > 3:
        break

    print(i) # 0 1 2 3
    count += 1

# Führt zu Neuinitialisierung 
print(next(f(10))) # 5? # exception? # 1



gen = f(10)
gen2 = gen

count = 0
for i in gen:
    print(i)
    if count > 3:
        break
    count += 1
     # 0 1 2 3
    
# print(i) # 5

# Führt zu Neuinitialisierung 
print(next(gen))
print(next(gen2)) # 5? # exception? # 1
print(next(gen))