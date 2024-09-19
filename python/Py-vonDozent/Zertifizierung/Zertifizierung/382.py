# QUESTION 382
# Assuming that the code below has been executed successfully,
#  which of the following expressions will
# always evaluate to True? (Choose two.)

import random
v1 = random.random()
# seed: [0.883654734, 0.3523462536, 0.16542736284572, ...]
# seed generiert nach Algorithmus deterministisch (IMMER) dieselbe Sequenz von Zufallszahlen
# Mit dem seed wählst du eine davon aus.
v2 = random.random()
# A. False, SEHR unwahrscheinlich, dass zweimal dieselbe Zahl gezogen wird. 
# Außerdem: Kein seed 
v1 == v2
# B. True, weil bis 0.9999999999999
v1 < 1
# C. True, ein Element wird "gewürfelt"
random.choice([1, 2, 3]) > 0 
# D. False, weil nur ein Listenelement gezogen wird. 
len(random.sample([1, 2, 3], 1)) > 2
