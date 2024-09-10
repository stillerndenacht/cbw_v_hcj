# QUESTION 292
# What can you deduce from the following statement? (Choose two.)

# with open(csv_datei_pfad, "r") as csv_datei:

str = open('file.txt', 'rt') 
str.write() # Fehler, da Lesemodus r

# A. str is a string read in from the file named file.txt
# str ist ein stream, kein string

# B. a newline character translation will be performed during the reads
# Automatische Übersetzung des Zeilenumbruchs in das jeweilige Format 
# des Zielsystem. 

# C. if file. txt does not exist, it will be created
# Wir befinden uns im Lesemodus, es wird deswegen keine neue Datei erzeugt
# die wäre sowieso leer...

# D. the opened file cannot be written with the use of the str variable
# Wir können die Datei nicht beschreiben, da sie im Lesemodus ist. 

# Lösung: B und D