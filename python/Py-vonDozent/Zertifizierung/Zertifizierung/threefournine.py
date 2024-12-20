# QUESTION 349
# What is the expected output of the following snippet?

# Instanzen von Upper sind Instanzen NUR von Upper
# Instanzen von lower sind Instanzen von Lower und Upper wg. Vererbung.
class Upper:
    def method(self):
        return 'upper'

class Lower(Upper):
    def method(self):
        return 'lower'
    
Object = Upper()

print(isinstance(Object, Lower), end=' ')
print(Object.method())

# __bases__ enthält nur eine Liste der direkten Elternklassen 
print(Lower.__bases__)
print(Upper.__bases__)

# A. True upper
# B. True lower
# C. False upper (X)
# D. False lower

# Lösung: C 