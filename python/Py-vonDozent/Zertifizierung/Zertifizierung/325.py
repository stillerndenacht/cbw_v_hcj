# QUESTION 325
# If s is a stream open for reading, what do you expect from the following invocation?

c = s.read()

# A. one line of the file will be read and stored in the string called c
# readline ist eine andere Methode

# B. the whole file content will be read and stored in the string called c
# Der gesamte Inhalt wird eingelesen

# C. one character will be read and stored in the string called c
# Mit einem Parameter legt man die Anzahl der zu lesenden character fest.
# Falsch

# D. one disk sector (512 bytes) will be read and stored in the string called c

# Lösung: B