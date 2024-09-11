a, b, c = (1,2),(3,4),(5,6)
print (a, b, c)
a, b,c = a[0]+c[1], b[0]+b[1],c[0]+a[1]
print (a, b, c)

a = 1/10
b = 0.1
print(a, b)
print(a == b)
print(repr(a), repr(b))
print(a*100, b*100)
print(a+a+a+a+a == b+b+b+b+b)
print(a.hex(), b.hex())

a = 'Marvin\'s weed\'s name\'s "La Sage"'
b = "Marvin's weed's name's \"La Sage\" "
print(a)
print(b)