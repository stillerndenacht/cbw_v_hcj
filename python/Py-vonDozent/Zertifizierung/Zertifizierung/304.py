# QUESTION 304
# Which of the listed actions can be applied to the following tuple? (Choose two.)

tup = ()

# A. tup[:] # Erstellt Kopie eines Tupels => möglich
# B. tup.append(0) # Nicht möglich, da immutabel
# C. tup[0] # Es gibt keinen Index 0, kein Wert an Stelle 0
# D. del tup

# Lösung: A, D


tup = (8,9,10)
del tup[0]
# wir dürfen den Inhalt des Tupels nicht ändern.
# Traceback (most recent call last):
#   File "<stdin>", line 1, in <module>
# TypeError: 'tuple' object doesn't support item deletion

# ABER: Das Tupel als solches (bzw. die Referenz auf das Tupel)
# DARF gelöscht werden. 
#  Löschen der Referenz durch
del tup
# Die Garbage colelction räumt dann nachrangig den Speicher des Tupels weg.
# Dies passiert nur, wenn es keine weitere Referenz auf diesen Speicher gibt.
# (z.B., wenn ich vorher ref = tup gesetzt habe, Kopie der Referenz)

str = (8,9,10)
str(2) # str(2) nicht nutzbar
# Traceback (most recent call last):
#   File "<stdin>", line 1, in <module>
# TypeError: 'tuple' object is not callable
del str 
str(2) # jetzt ist str(2) wieder nutzbar