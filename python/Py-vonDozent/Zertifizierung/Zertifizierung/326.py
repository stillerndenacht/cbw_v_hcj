# QUESTION 326
# You are going to read 16 bytes from a binary file into a bytearray 
# called data. Which lines would you use?
# (Choose two.)

# A. data = bytearray(16); bf.readinto(data)
# Wir legen erst ein bytearay der Größe 16 Bytes an.
# bf ist der Stream

# B. data = binfile.read(bytearray(16))
# read arbeitet nicht mit einem bytearray als Argument
# Führt zu TypeError
# read erwartet einen int

# C. bf.readinto(data = bytearray(16))
# Zuweisung innerhalb eines Methodenaufrufs nicht erlaubt. 
# Daher muss data vorher angelegt werden oder bytearray(16) anonym eringesetzt werden.

# D. data = bytearray(binfile.read(16))
# Das Ergebnis des Einlesens mit binfile initialisiert das bytearray.

# Lösung: AD
