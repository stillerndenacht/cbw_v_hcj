# QUESTION 307
# Which of the equations are True? (Choose two.)

# A. 
# ord konvertiert einen string der Länge 1 (character) in eine code point Zahl. 
# chr konvertiert eine code point Zahl in einen Character.
# chr(99) => 'c'
# ord('c') => 99
x = "c"
chr(ord(x)) == x
# B. 
ord(ord(x)) == x
# geht nicht, weil ord(x) 99 ist und ord(x) keine Ganzzahlen akzeptiert.
# Traceback (most recent call last):
#   File "<stdin>", line 1, in <module>
# TypeError: ord() expected string of length 1, but int found
# C. 
x = 99
chr(chr(x)) == x
# Traceback (most recent call last):
#   File "<stdin>", line 1, in <module>
# TypeError: 'str' object cannot be interpreted as an integer

# D. 
x = 99
ord(chr(x)) == x