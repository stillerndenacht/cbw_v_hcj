# QUESTION 265
# Assuming that the following snippet has been successfully executed,
# which of the equations are True?
# (Choose two.)

a = [1] # Wir erzeugen eine Liste mit einem Element
b = a # Referenzen werden kopiert (mutable)
# b = a[:] # hier wären a und b zwei UNABHÄNGIGE Kopien der Liste, durch slicing
# a is b # Referenzen gleich? Bei Ausführung von Zeile 8 False
a[0] = 0 # a[1] = 0 : Zugriff auf nicht vorhandene Indizes sind in Python nicht zulässig.

# del a # löscht die Referenza auf die Liste, aber b bleibt bestehen
# del a[0] # Referenzen a und b existieren weiter, aber a[0] wird innerhalb
# der Liste gelöscht UND die Änderung ist sichtbar in a und b  

# Antwortmöglichkeiten
# A. len(a) == len(b) : True
# B. b[0] +1 == a[0] 
# C. a[0] == b[0] : True
# D. a[0] + 1 == b[0]

# Listen sind mutable
