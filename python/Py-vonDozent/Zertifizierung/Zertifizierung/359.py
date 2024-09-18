# QUESTION 359
# What is the expected output of the following code?

mytu = ('a', 'b', 'c') 
# Tupel wird kopiert, die Kopie als map verändert und als map object zurückgeliefert.
# Anschließend wird map wieder in tuple konvertiert. 
m = tuple(map(lambda x: chr(ord(x) + 1), mytu))
print(m[-2])

# A. a
# B. c
# C. an exception is raised
# D. b

# Lösung: B