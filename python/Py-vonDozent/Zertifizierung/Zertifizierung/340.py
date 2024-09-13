# QUESTION 340
# Which of the following invocations are valid? (Choose two.)

# A. 
"python".sort() # Es gibt kein sort() auf Strings, da Strings immutabel sind
# B. 
sorted("python") # True, es wird eine Kopie der Daten erstellt und eine Liste zurückgegeben. 
# sorted hat keine Objektbindung und arbeitet mit Kopien als builtin-Funktion 
# C. 
rfind("python", "r")
# False, rfind ist eine Methode der Klasse string
# "python".rfind('r'), read-only Operation unkritisch für immutable Datentypen 
# find von links, rfind von rechts
# D. 
"python".index("th") # True, gibt den Startindex des Teilstrings zurück (read-only)
