# Aufgabe 5.1
# Das zu testende eingeben
jahr = int(input("Jahr: "))

# Ein Kandidat für ein Schaltjahr ist duch 4 teilbar
if jahr % 4 == 0 and not jahr % 100 == 0 or jahr % 400 == 0:
    print(f"Jahr {jahr} ist ein Schaltjahr")
else:
    print("Niete")

if jahr % 4 == 0 and jahr % 100 != 0 or jahr % 400 == 0:
    print(f"Jahr {jahr} ist ein Schaltjahr")
else:
    print("Niete")

# unittest !
A = True; B = False; C = True
# A = True; B = True; C = True
# A = False; B = False; C = True
# A = True; B = False; C = False
# A = False; B = True; C = True
# A = False; B = False; C = False
 
 
#print(A and B or B and C or A and C)

print((A and B) or (A and C) or not (B and C))

# Wie kommt man auf sowas? ;-)
print("Logical XOR: ", (A and not B and not C) or (not A and B and not C) or (not A and not B and C))

# ^ XOR-Operator, nicht mit Logical XOR identisch
print("XOR", A^B^C)

print((A and not B) or (not A and B)) 
print(A^B)

print("Opposite", (A and B and not C) or (not A and not B and C))
print("Opposite 2: ", (A and B or C) or (A or B and C))

print(not A and not B and not C)

# print(A and B and C)
# print(A or B or C)
# print(A and B)
# print(A and C)
