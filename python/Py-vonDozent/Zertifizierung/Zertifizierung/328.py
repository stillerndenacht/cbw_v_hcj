# QUESTION 328
# Assuming that the code below has been executed successfully,
# which of the following expressions will
# always evaluate to True? (Choose two.)

import random
# Pseudozufallszahlen sind simulierte Zufallszahlen
# Mit dem seed bestimmt man deterministisch (hier: berechnet) 
# und ist IMMER dieselbe Reihenfolge 
random.seed(1)
# Zufallszahl ziehen zwischen 0 und 0.999999
v1 = random.random()
# neu initialisieren des seeds,
# damit wird die Sequenz neu gestartet
random.seed(1)
v2 = random.random()

# A. v1 >= 1
# Ziehen der Fließkommazufallszahl zwiachen [0, 0.99999], daher wird die 1
# nicht berücksichtigt. 

# B. v1 == v2
# Trifft zu, da der Zufallsgenerator in Zeile 10 und 15 neu initialisiert wird.

# C. len(random.sample([1, 2, 3], 2)) > 2
# "Lottoexperiment", 6 aus 49
# Falsch

# D. random.choice([1, 2, 3]) >= 1 
# Da alle Werte in der Liste >= 1 sind, trifft diese Bedingung immer zu.

# Lösung: BD
