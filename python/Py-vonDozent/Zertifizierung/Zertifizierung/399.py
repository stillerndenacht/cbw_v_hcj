# QUESTION 399
# With regards to the directory structure below, select the proper forms of the directives 
# in order to import module_c. (Select two answers)

# pypack (dir)
# |
# |-- upper (dir)
# | |
# | |-- lower (dir)
# | | |
# | | |_ module_c.py (file)
# | |
# | |_ module_b.py (file)
# |
# |_ module_a.py (file)

# A. from pypack.upper.lower import module_c
# B. import pypack.upper.lower.module_c
# C. import upper.module_c
# D. import upper.lower.module_c

# Lösung: AB
# Es muss immer der gesamte Pfad berücksichtigt werden.
# Verwendung von Alias (as) bei B möglich.
# Bei A:
# hallo()
# Bei B: Nutzung 
# pypack.upper.lower.module_c.hallo()