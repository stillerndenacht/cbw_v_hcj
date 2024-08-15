# Mathematik-Modul
import math

math.pow(2,3) # Unterschied zu ** im Rückgabedatentyp
math.sqrt(9) # Rückgabe: float

math.ceil(8.9) # Rückgabe: 9
math.floor(8.9) # Rückgabe: 8

math.ceil(-8.9) # Rückgabe: -8
math.floor(-8.9) # Rückgabe: -9

# trunc gibt immer den nächsten Wert in Richtung 0 an
# trunc bei positiven Zahlen floor, bei negativen Zahlen ceil
# trunc schneidet die Dezimalstellen weg 
math.trunc(8.9)
math.trunc(-8.9)

# math.trunc(8.9) + math.ceil(-8.9) 
math.sin(1)

# Mathematische Konstanten sind in Python keine Konstanten !!! 
print(math.pi)

# pi ist überschreibbar
# VORSICHT
math.pi = 9
print(math.pi)

# unabhängig von der math-Module gibt es Funktionen, die
# direkt verfügbar sind
round(2.15782146, 3)

import numpy
numpy.pi = 9