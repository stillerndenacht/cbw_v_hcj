# QUESTION 309
# Assuming that lst - is a four-element list. Is there any difference between
# these two statements?

del lst # the first line
# Hier wird die Referenz auf die Liste gelöscht. 
# Der Inhalt ist dann gelöscht, wenn es keine WEITERE Referenz auf diese Liste gibt.

del lst[:] # the second line
# Hier wird der Inhalt der Liste gelöscht (durch slicing). 
# Diese Änderung sieht man dann über JEDE Referenz auf diese Liste.

# A. yes, there is, the first line empties the list, the second line 
# deletes the list as a whole

# B. yes, there is, the first line deletes the list as a whole, 
# the second line just empties the list

# C. no, there is no difference 
# Nicht korrekt
# D. yes, there is, the first line deletes the list as a whole, 
# the second line removes all the elements except
# the first one
# Nicht korrekt

# Lösung: B