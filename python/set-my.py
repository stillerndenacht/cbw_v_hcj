a = set([1,2,3,4,5,6,7])
b = {3,4,5,6}
c = set({7,8,9})
d = set((0,10,11))

z = a | b
print("z = a | b : ", z)
z2 = b | c | d
print("z2 = b | c | d : ", z2)
y = a & b
print("y = a & b : ", y)
y2 = a & c
print("y2 = a & c : ", y2)
x = a ^ b
print("x = a ^ b : ", x)
