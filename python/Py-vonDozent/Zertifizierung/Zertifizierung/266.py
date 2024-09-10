# QUESTION 266
# Assuming that the following snippet has been successfully executed, 
# which of the equations are False?
# (Choose two.)

a = [0]
b = a[:] # es wird eine "echte" Kopie erstellt 
# b = [0], a = [0], a is b = False
a[0] = 1 
# b[0] = 0, a[0] = 1

# A. len(a) == len(b) # True
# B. a[0] - 1 == b[0] # True
# C. a[0] == b[0] # False
# D. b[0] - 1 == a[0] # False 

# Lösung: C und D (weil in der Frage nach False gefragt wird)
