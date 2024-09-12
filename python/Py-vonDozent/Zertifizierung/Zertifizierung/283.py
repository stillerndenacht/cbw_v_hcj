# QUESTION 283
# What is the expected behavior of the following code?
def f(n):
    for i in range(1, n + 1):
        yield i
print(f(2))

# Um Werte abzurufen, wird next() benötigt.
gen = f(2)

print(next(f(2))) # 1
print(next(f(2))) # 1, da ein NEUER Generator erzeugt wird (u.U. sogar an selber Speicheradresse)
print(next(gen)) # 1
print(next(gen)) # 2

# try:
#     print(next(gen)) # StopIteration Exception
# except StopIteration:
#     print("Der Generator liefert keine neuen Werte mehr")

# print("Hallo")

# A. print 4321
# B. print <generator object f at (some hex digits)>
# C. cause a runtime exception
# D. print 1234

# Lösung: B