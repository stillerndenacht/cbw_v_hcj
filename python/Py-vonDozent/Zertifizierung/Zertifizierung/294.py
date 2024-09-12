# QUESTION 294
# Python's built in function named open() tries to open a file and returns:

# A. an integer value identifying an opened file
# B. an error code (0 means success)
# C. a stream object 
# D. always None

# Lösung: C

f = open('test.txt', 'rt') # f ist hier ein STREAM, kein string

# Stream ist eine Klasse, die Methoden bereitstellt, um mit Datenflüssen umzugehen
# => Dateien, Netzwerk, Konsole, ... 
# Eingabe / Ausgabe 
# ganz normale Klasse, aus der Objekte erzeugt werden können. 