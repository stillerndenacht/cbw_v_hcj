# QUESTION 271
# What is the expected output of the following snippet?

s = 'abc'
for i in len(s): # hinter dem in muss immer eine iterierbare Struktur stehen, z.B.
    # liste, range, string 
    # len(s) ist eine Zahl und daher nicht iterierbar, TypeError
    s[i] = s[i].upper() # str does not support item assignment s[0] = 'a'
    # Strings sind immutabel
print(s)

# Lösung: B


for i in s: # hinter dem in muss immer eine iterierbare Struktur stehen, z.B.
    # liste, range, string 
    # len(s) ist eine Zahl und daher nicht iterierbar, TypeError
    s[i] = s[i].upper() 
print(s)

# A. abc
# B. The code will cause a runtime exception
# C. ABC
# D. 123


for i in range(1,10):
    pass

print(i) # i is available




s = 'abc'
# s = s.upper() # :-)

for i, v in enumerate(s): # hinter dem in muss immer eine iterierbare Struktur stehen, z.B.
    print(i,v) # 0 a, 1 b 2 c
    # liste, range, string 
    # len(s) ist eine Zahl und daher nicht iterierbar, TypeError
    s[i] = s[i].upper() # s[0] = s[0].upper() 'a' => 'A' ??
  # s['a'] = s['a'].upper()

print(s)


# s = 'abc'

# for i in s: # hinter dem in muss immer eine iterierbare Struktur stehen, z.B.
#     # liste, range, string 
#     # len(s) ist eine Zahl und daher nicht iterierbar, TypeError
#     s[i] = s[i].upper() # s['a']
#   # s['a'] = s['a'].upper()

# print(s)

liste = [8,9,10]
for index, wert in enumerate(liste):
    print(index, wert)

liste2 = [8,(1,2),10]
# enumerate = Aufzählung
for index, wert in enumerate(liste2):
    print(index, wert)
    if isinstance(wert, tuple):
        for i,v in enumerate(wert):
            print(i, v)


liste = [8,9,10, (1,2,3,4,5,6,7)]
for index, wert in enumerate(liste[3]):
    print(index, wert)

 